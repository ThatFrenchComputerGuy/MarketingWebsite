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
                        console.log(meetings);
                        $.each(meetings, function(key) {
                            var meetingText = "";
                            for (notes in meetings[key]["notes"]) {
                                meetingText += "\n<b>" + meetings[key]["notes"][notes]["heading"] + "</b>";
                                meetingText += "\n" + meetings[key]["notes"][notes]["contents"];
                            }
                            if (meetingText == "") { meetingText = "\nNo Recorded Notes."; }
                            meetingText.trim();

                            var text = $([
                                "<div class = 'notes'>",
                                    "<div class = 'smallText'>Meeting ID: " + (key) + "</div>",
                                    "Client: " + meetings[key]["client"]["name"],
                                    "\nNotes: " + meetingText,
                                    "<div class = 'smallText'>",
                                    "Location: " +  meetings[key]["location"],
                                    "Start Date: " + meetings[key]["startDate"],
                                    "End Date: " + meetings[key]["endDate"],
                                    "</div>",
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
