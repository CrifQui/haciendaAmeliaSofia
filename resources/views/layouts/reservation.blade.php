
<!DOCTYPE html>
<html>
<head>
    <base href="https://demos.telerik.com/kendo-ui/datetimepicker/template">
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>
    <title></title>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.1.220/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.1.220/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.1.220/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.1.220/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.1.220/js/kendo.all.min.js"></script>
    

</head>
<body>

        <div id="example">
            <div class="demo-section k-content">
                <h4>Birthday Calendar</h4>
                <input id="datetimepicker" style="width: 100%;" />
            </div>

            <script>
                function isInArray(date, dates) {
                    for(var idx = 0, length = dates.length; idx < length; idx++) {
                        var d = dates[idx];
                        if (date.getFullYear() == d.getFullYear() &&
                            date.getMonth() == d.getMonth() &&
                            date.getDate() == d.getDate()) {
                            return true;
                        }
                    }

                    return false;
                }

                $(document).ready(function() {
                    var today = new Date(),
                        birthdays = [
                           new Date(today.getFullYear(), today.getMonth(), 11, 10, 0, 0),
                           new Date(today.getFullYear(), today.getMonth(), 11, 10, 30, 0),
                           new Date(today.getFullYear(), today.getMonth(), 11, 14, 0, 0),
                           new Date(today.getFullYear(), today.getMonth() + 1, 6, 20, 0, 0),
                           new Date(today.getFullYear(), today.getMonth() + 1, 27, 8, 0, 0),
                           new Date(today.getFullYear(), today.getMonth() + 1, 27, 18, 0, 0),
                           new Date(today.getFullYear(), today.getMonth() - 1, 3, 12, 0, 0),
                           new Date(today.getFullYear(), today.getMonth() - 2, 22, 16, 30, 0)
                        ];

                    $("#datetimepicker").kendoDateTimePicker({
                        value: today,
                        dates: birthdays,
                        weekNumber: true,
                        month: {
                            // template for dates in month view
                            content: '# if (isInArray(data.date, data.dates)) { #' +
                                         '<div class="birthday"></div>' +
                                     '# } #' +
                                     '#= data.value #',
                            weekNumber: ' <a class="italic">#= data.weekNumber #</a>'
                        },
                        footer: "Today - #=kendo.toString(data, 'd') #",
                        open: function () {
                            var dateViewCalendar = this.dateView.calendar;
                            if (dateViewCalendar) {
                                dateViewCalendar.element.width(300);
                            }
                        }
                    });
                });
            </script>

            <style>
                .birthday {
                    background: transparent url(../content/web/calendar/cake.png) no-repeat 0 50%;
                    display: inline-block;
                    width: 16px;
                    height: 16px;
                    vertical-align: middle;
                    margin-right: 3px;
                }
                .italic {
                    font-style: italic;
                }
            </style>
        </div>


</body>
</html>
