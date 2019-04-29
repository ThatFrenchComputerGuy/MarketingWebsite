<article>
    <div id = "notesContainer">
        <h2>Your Notes</h2>
        <div id = "notesContentContainer"></div>
    </div>

    <script>
        var token;
        $(window).on("load", function() {
            $.ajax({
                url: "php/myaccesscontent/tokenhandler.php",
                type: "POST",
                data: {get: true},
                success: function(TOKEN) {
                    token = TOKEN;
                    getMeetings();
                }
            });

            function getMeetings() {
                $.ajax({
                    url: "php/myaccesscontent/fetchnotes.php",
                    type: "GET",
                    dataType: "text json",
                    success: function(meetings) {
                        $.each(meetings, function(key) {
                            var meetingText = "";
                            for (notes in meetings[key]["notes"]) {
                                meetingText += "\n\n<div class = 'notesBox'><span class = 'highlightText'><b>" + meetings[key]["notes"][notes]["heading"] + "</b></span>";
                                meetingText += "\n" + meetings[key]["notes"][notes]["contents"] + "</div>";
                            }
                            if (meetingText == "") { meetingText = "\nNo Recorded Notes."; }
                            meetingText.trim();

                            clientImg = meetings[key]["client"]["photo"];

                            var text = $([
                                "<div class = 'notes'>",
                                    "<div><img src=https://backend.team8dev.com/static/images/" + clientImg + "></img><span class = 'client'>Client: " + meetings[key]["client"]["name"] + "</span></div>",
                                    "<div class = 'smallText'>Location: " +  meetings[key]["location"],
                                    "Start Date: " + new Date(meetings[key]["startDate"]).toLocaleString("en-GB", { timeZone: "UTC" }),
                                    "End Date: " + new Date(meetings[key]["endDate"]).toLocaleString("en-GB", { timeZone: "UTC" }),
                                    "</div>",
                                    "\nNotes: " + meetingText,
                                "</div>"
                            ].join("\n"));

                            $("#notesContentContainer").append(text);
                        });
                    }
                });
            }
        });
    </script>
</article>
