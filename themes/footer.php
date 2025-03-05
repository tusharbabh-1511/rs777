<!-- start footer -->
<div class="bg-light-gray has-shapes has-bg-brash bg-brash-top"
     style="background-image: url(images/brushes/footer.svg)">
    <div class="footer-bottom">
        <div class="container">
            <div class="row chart-links justify-content-center">
                <div class="col-6 col-sm-3 text-center" id="footerJodiChartLink">
                    <h3>Jodi Charts</h3><br/>
                </div>
                <div class="col-6 col-sm-3 text-center" id="footerPanaChartLink">
                    <h3>Pana Charts</h3><br/>
                </div>
            </div>
            <!-- start -->
            <div class="container mt-3">
                <div class="row justify-content-center">
                        <a href="#" class="btn btn-store mx-3">
                            <span class="fa fa-android fa-3x pull-left"></span> 
                            <span class="btn-label">Download on the</span>
                            <span class="btn-caption">Google Play</span>
                        </a>
                        <a href="#" class="btn btn-store mx-3">
                            <span class="fa fa-apple fa-3x pull-left"></span> 
                            <span class="btn-label">Download on the</span>
                            <span class="btn-caption">App Store</span>
                        </a>
                </div>
            </div>
            <!-- end -->
            <div class="row mt-3">
                <div class="col-12">
                    <div class="block border-top text-center content">
                        Copyright &copy; 2022 <a href="index.html"><?= SITE_DOMAIN_NAME ?></a>. All Rights Reservederved
                    </div>
                    <!-- <div class="block border-top text-center content">
                        <a href="http://www.dmca.com/Protection/Status.aspx?ID=b5ca191e-e799-4b1b-8aa0-61b75b4c4aad"
                           title="DMCA.com Protection Status" class="dmca-badge"> <img
                                src="../images.dmca.com/Badges/dmca_protected_sml_120me2e8.png?ID=b5ca191e-e799-4b1b-8aa0-61b75b4c4aad"
                                alt="DMCA.com Protection Status"/></a>
                        <script src="../images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<div class="modal fade rounded" id="timeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0 bg-transparent">
                <button type="button" class="close" style="margin-right: 6px" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div class="card-body">
                    <h3 class="font-weight-600 mb-30" id="timeProviderName"></h3>
                    <table class="table t-cell" style="border-collapse:collapse">
                        <tr style="background: #fab028">
                            <th class="t-cell" id="timeTh"></th>
                            <th class="t-cell">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em"
                                     height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                Result Time
                            </th>
                            <!-- <th class="t-cell">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em"
                                     height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                Bid Last Time
                            </th> -->
                        </tr>
                        <tr id="timeOpen">
                            <th class="t-cell green" id="timeOpenTh">Open</th>
                            <td class="t-cell" id="timeOpenResult"></td>
                            <!-- <td class="t-cell" id="timeOpenLastBid"></td> -->
                        </tr>
                        <tr id="timeClose">
                            <th class="t-cell red" id="timeCloseTh">Close</th>
                            <td class="t-cell" id="timeCloseResult"></td>
                            <!-- <td class="t-cell" id="timeCloseLastBid"></td> -->
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start of videoModal -->
<!-- <div class="modal fade rounded" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0 bg-transparent">
                <button type="button" class="close" style="margin-right: 6px" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="showVideo" src="#"
                            style="border: none; position: absolute; top: 0; left: 0; height: 100%; width: 100%;"
                            allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                            allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end of videoModal -->

<!-- strat scroll to top -->
<a onclick="window.scrollTo(0, 0)" class="btn btn-primary scroll-to-top-btn smooth-scroll position-fixed">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
        <path id="Layer" fill="currentColor"
              d="M7.2 19.2L15.2 11.2C15.68 10.71 16.43 10.68 16.96 11.08L17.08 11.2L25.08 19.2L23.2 21.08L16.14 14.02L9.08 21.08L7.2 19.2Z"/>
    </svg>
</a>
<!-- end scroll to top -->


<!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"911d5a398ed9f41d","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"7ccc1ee03b524e1ebd1e72da1445bcd8","b":1}' crossorigin="anonymous"></script> -->
<script>
let currentPage = window.location.pathname.split("/").pop();
console.log(currentPage);
let APIURL = "https://cors-anywhere.herokuapp.com/https://mgmarket.mkgroup.me/results";
const GameRates = [
    { GameName: "Single Digit", Rate: 9.5 },
    { GameName: "Jodi Digit", Rate: 95.0 },
    { GameName: "Single Pana", Rate: 150.0 },
    { GameName: "Double Pana", Rate: 300.0 },
    { GameName: "Triple Pana", Rate: 900.0 },
    { GameName: "Half Sangam", Rate: 1000.0 },
    { GameName: "Full Sangam", Rate: 10000.0 },
    { GameName: "Jodi Family", Rate: 95.0 },
    { GameName: "Pana Family", Rate: 140.0 },
    { GameName: "Cycle Pana", Rate: 140.0 },
    { GameName: "SP Motor", Rate: 140.0 },
    { GameName: "DP Motor", Rate: 280.0 }
];

function GetAllMarketInfo()
{
    $.ajax({
        url: APIURL, 
        type: 'GET',
        dataType: 'json',
        success: function(Response) {
            // console.log(response);
            var JodiChartName ="";
            var PanaChartName = "";
            var ChartScreenJodichart = "";
            var ChartScreenPanachart = "";
            var HomeGameResultList = "";
            Response.forEach(Item => {
                // console.log("Item : ",Item);

                JodiChartName += "<div>";
                JodiChartName += "<a href='jodiChart.php?Id="+Item.id+"' class='jodi-chart-link' data-id='"+Item.id+"' >"+Item.MarketName+"</a><br/>";
                JodiChartName += "</div>";

                PanaChartName += "<div>";
                PanaChartName += "<a href='panaChart.php?Id="+Item.id+"' class='pana-chart-link' data-id='"+Item.id+"' >"+Item.MarketName+"</a><br/>";
                PanaChartName += "</div>";

                
                ChartScreenJodichart += "<div class='col-xl-12 col-md-12'>";
                ChartScreenJodichart += "<div class='card rounded shadow border-0 timetable'>";
                ChartScreenJodichart +="<div class='card-body p-15' style='text-align: center'>";
                ChartScreenJodichart +="<a href='jodiChart.php?Id="+Item.id+"' class='chartScreen-jodi-chart-link' data-id='"+Item.id+"' >";
                ChartScreenJodichart +="<h3 class='font-weight-600'>"+Item.MarketName+"</h3>";
                ChartScreenJodichart +="</a>";
                ChartScreenJodichart +="</div>";
                ChartScreenJodichart +="</div>";
                ChartScreenJodichart +="</div>";

                ChartScreenPanachart += "<div class='col-xl-12 col-md-12'>";
                ChartScreenPanachart += "<div class='card rounded shadow border-0 timetable'>";
                ChartScreenPanachart +="<div class='card-body p-15' style='text-align: center'>";
                ChartScreenPanachart +="<a href='panaChart.php?Id="+Item.id+"' class='chartScreen-pana-chart-link' data-id='"+Item.id+"'>";
                ChartScreenPanachart +="<h3 class='font-weight-600'>"+Item.MarketName+"</h3>";
                ChartScreenPanachart +="</a>";
                ChartScreenPanachart +="</div>";
                ChartScreenPanachart +="</div>";
                ChartScreenPanachart +="</div>";

                var ShowGameStatusObj = checkTimeStatus(Item.OpenTime,Item.CloseTime);

                HomeGameResultList += "<div class='col-xl-4 col-md-6'>";
                HomeGameResultList +=   "<div class='card rounded shadow border-0' style='margin-bottom: 6px'>";
                HomeGameResultList +=    "<div class='card-body' style='padding: 15px 15px 6px 15px'>";
                HomeGameResultList +=        "<div>";
                HomeGameResultList +=            "<h3 class='font-weight-600 mb-10'>";
                HomeGameResultList +=                "<span>"+Item.MarketName+" </span>";
                HomeGameResultList +=                "<span class='time ShowModal' style='cursor: pointer;' data-toggle='modal' data-target='#timeModal' data-id='"+Item.id+"' data-market-name='"+Item.MarketName+"' data-opentime='"+Item.OpenTime+"' data-closetime='"+Item.CloseTime+"'>";
                HomeGameResultList +=            "<img src='images/info.png' alt='Chart Information' height='14px' width='14px'>";
                HomeGameResultList +=            "</span>";
                HomeGameResultList +=            "</h3>";

                HomeGameResultList +=            "<span class='h2 font-weight-bold d-inline-flex mb-30'>";
                HomeGameResultList +=                "<h3 class='font-weight-bold'>"+showResultDigit(Item.OpenDigit,Item.JodiDigit,Item.CloseDigit)+"</h3>";
                HomeGameResultList +=            "</span>";
                HomeGameResultList +=            "<div style='display: inline;position: absolute;top: 15px; right: 15px;text-align: center'>";
                HomeGameResultList +=                "<span style='font-size: 12px;' class='"+ShowGameStatusObj.ClassName+"'>"+ShowGameStatusObj.DisplayString+"</span><br/>";
                HomeGameResultList +=               "<br/>";
                HomeGameResultList +=            "</div>";
                HomeGameResultList +=        "</div>";
                HomeGameResultList +=       "<div style='text-align: center'>";
                HomeGameResultList +=           "<a href='jodiChart.php?Id="+Item.id+"'>";
                HomeGameResultList +=               "<button class='btn btn-sm btn-outline-primary chart' style='width: 120px;padding: 0px;margin-right:2px !important;' type='button'> Jodi Chart</button>";
                HomeGameResultList +=           "</a>";
                HomeGameResultList +=           "<a href='panaChart.php?Id="+Item.id+"' >";
                HomeGameResultList +=               "<button class='btn btn-sm btn-outline-primary chart' style='width: 120px;padding: 0px;margin-left:2px !important;' type='button'>Pana Chart</button>";
                HomeGameResultList +=           "</a>";
                HomeGameResultList +=       "</div>";
                HomeGameResultList +=    "</div>";
                HomeGameResultList +=   "</div>";
                HomeGameResultList += "</div>"; 

            });

            //setting footer header chart list seeting
            var html1 = $('#footerJodiChartLink').html();
            $('#navBarJodiChartLink').html(JodiChartName);
            $('#chartScreenJodichart').html(ChartScreenJodichart);
            $('#footerJodiChartLink').html(html1 + JodiChartName);
           
            var html2 = $('#footerPanaChartLink').html();
            $('#navBarPanaChartLink').html(PanaChartName);
            $('#chartScreenPanachart').html(ChartScreenPanachart);
            $('#footerPanaChartLink').html(html2 + PanaChartName);

            $("#homeGamesList").html(HomeGameResultList);


        },
        error: function(xhr, status, error) {
            console.log('Error: ' + error);  // Callback function if request fails
        }
    });
}

function getSpecificMarketinfo(Id,chart)
{
    $.ajax({
        type: "GET",
        url: APIURL+"/"+Id,
        dataType : "json",
        success: function(data) {
            let FirstData = data[0];
            
            if(currentPage == 'panaChart.php')
            {
                $('#ChartHeading').text(`${FirstData.MarketName} Pana Chart | ${FirstData.MarketName} Panel Chart`);
                $('#ChartSubHeading').text(`${FirstData.MarketName} Panel Chart Satta Matka Record Old History Historical Data Bracket Results Chart Online Live Book Digits Numbers`);
            }
            else if(currentPage == 'jodiChart.php')
            {
                $('#ChartHeading').text(`${FirstData.MarketName} Jodi Chart`);
                $('#ChartSubHeading').text(`${FirstData.MarketName} Jodi Chart Satta Matka Record Old History Historical Data Bracket Results Chart Online Live Book Digits Numbers`);
            }
            let groupedData = groupByWeek(data);
            generateTable(groupedData,chart);
        },
        error : function (xhr, status, error)
        {

        }
    });
}

function showResultDigit(OpenDigit,JodiDigit,CloseDigit)
{
    if(OpenDigit == null && JodiDigit == null && CloseDigit == null)
    {
        return "***-**-***";
    }
    else
    {
        var Str = "";
        if(OpenDigit != null && OpenDigit != "")
        {
            Str = OpenDigit;
        }
        if(JodiDigit != null && JodiDigit != "")
        {
            Str += (JodiDigit.trim().length > 1 ) ?  "-"+JodiDigit : "-"+JodiDigit+"*" ;
        }
        else
        {
            Str += "-**";
        }
        if(CloseDigit != null && CloseDigit != "")
        {
            Str += "-"+CloseDigit;
        }
        else
        {
            Str += "-***";
        }
        return Str;
    }
}

function parseTime(timeStr) {
    // Parse the time string like "05:25 PM" into 24-hour format
    const timeParts = timeStr.match(/(\d{1,2}):(\d{2})\s([APM]{2})/);
    if (!timeParts) {
        console.error('Invalid time format');
        return null;
    }

    let hours = parseInt(timeParts[1]);
    const minutes = parseInt(timeParts[2]);
    const period = timeParts[3];

    // Convert to 24-hour format
    if (period === 'PM' && hours < 12) hours += 12;
    if (period === 'AM' && hours === 12) hours = 0;

    return hours * 60 + minutes;  // Return time in minutes since midnight
}

function checkTimeStatus(startTime, endTime) {
    // Step 1: Parse the times
    const start = parseTime(startTime); // "03:25 PM"
    const end = parseTime(endTime);     // "05:25 PM"

    if (start === null || end === null) return;

    // Step 2: Get current time in minutes
    const now = new Date();
    const currentMinutes = now.getHours() * 60 + now.getMinutes();

    function createReturnObj(ReturnStr,ClassName)
    {
        return {ClassName : ClassName ,DisplayString : ReturnStr};
    }

    // Step 3: Compare current time with start and end times
    if (start < end) {
        // The time range is within a single day (e.g., "03:25 PM" to "05:25 PM")
        if (currentMinutes >= start && currentMinutes <= end) {
            // console.log('Current time is between the two times.');
            return createReturnObj("Running For Close","yellow");
        } else if (currentMinutes < start) {
            // console.log('Current time is before the start time.');
            // return "Running For Now";
            return createReturnObj("Running For Now","green");
        } else {
            // console.log('Current time is after the end time.');
            // return "Closed for Today";
            return createReturnObj("Closed for Today","red");
        }
    } else {
        console.warn("SOmething went wrong in time matching :");
        return;
        // The time range spans midnight (e.g., "10:00 PM" to "02:00 AM")
        if (currentMinutes >= start || currentMinutes <= end) {
            console.log('Current time is between the two times.');
        } else if (currentMinutes < start) {
            console.log('Current time is after the end time.');
        } else {
            console.log('Current time is before the start time.');
        }
    }
}

function groupByWeek(data) {
    let weeks = {};
    data.forEach(item => {
        let date = new Date(item.CreatedOn);
        let day = date.getDay(); // Get day of the week (0 = Sun, 1 = Mon, ..., 6 = Sat)

        // Ensure week starts from Monday
        let weekStart = new Date(date);
        weekStart.setDate(date.getDate() - (day === 0 ? 6 : day - 1)); // Adjust to Monday

        let weekKey = weekStart.toISOString().split('T')[0]; // Format YYYY-MM-DD
        if (!weeks[weekKey]) {
            weeks[weekKey] = { "weekStart": weekStart, "data": {} };
        }

        // Fix day index mapping to ensure Monday is first and Sunday is last
        let dayIndex = (day + 6) % 7; // Corrects shifting issue

        weeks[weekKey]["data"][dayIndex] = {
            open: item.OpenDigit,
            jodi: item.JodiDigit,
            close: item.CloseDigit
        };
    });
    return weeks;
}

function generateTable(weeks) {
    let tbody = $("#chartTable tbody");
    tbody.empty();

    Object.keys(weeks).forEach(weekStart => {
        let row = "<tr>";
        row += `<td class="cc"><span class="cp">${weekStart}</span>
                    <span class="cp">To</span>
                    <span class="cp">${new Date(new Date(weekStart).getTime() + 6 * 86400000).toISOString().split('T')[0]}</span></td>`;

        for (let i = 0; i < 7; i++) { // Loop from Monday (0) to Sunday (6)
            if (weeks[weekStart]["data"][i]) {
                let { open, jodi, close } = weeks[weekStart]["data"][i];
                if(chart === 'PANACHART')
                {
                    row += `<td class="cc"><span class="cp">${highlight(open,jodi)}</span>
                            <span>${highlight(jodi,jodi)}</span>
                            <span class="cp">${highlight(close,jodi)}</span></td>`;
                }
                else if(chart === 'JODICHART')
                {
                    row +=`<td class="cc">${highlight(jodi,jodi)}</td>`;
                }
                
            } else {
                
                if(chart === 'PANACHART')
                {
                    row += "<td class='cc'><span class='cp'>***</span><span>**</span><span class='cp'>***</span> </td>"; // Empty cell
                }
                else if(chart === 'JODICHART')
                {
                    row += `<td class="cc highlight">**</td>`;
                }
            }
        }
        row += "</tr>";
        tbody.append(row);
    });
}

function highlight(value,jodi) {
    let highlightValues = ["00", "05", "11", "16", "22", "27", "33", "38", "44", "49", "50", "55", "61", "66", "72", "77", "83", "88", "94", "99"];

    return highlightValues.includes(jodi) ? `<span class='highlight'>${value}</span>` : value;
}

function generateGameRateDiv()
{
    let GameRateHtml = "";
    GameRates.forEach(function( Item ,Index ){
        GameRateHtml += `<div class="col-xl-4 col-md-6">
                            <div class="card rounded shadow border-0">
                                <div class="card-body p-15" style="text-align: center">
                                    <div style="border-left: 4px solid #fab028">
                                        <h3 class="font-weight-600">${Item.GameName}</h3><span
                                            class="h4 d-inline-flex"><h4>1 RS KA ${Item.Rate} Rs</h4></span>
                                    </div>
                                </div>
                            </div>
                        </div>`;
    });

    $('#gameRateDiv').html(GameRateHtml);
}
$(document).ready(function(){
    console.log("footer code running...");

    if(currentPage == '<?= indexPage ?>' || currentPage == '')
    {
        generateGameRateDiv();
        
    }

    GetAllMarketInfo();

    $(document).on("click",".ShowModal",function(){
        // console.log("modalopen");
        $('#timeOpenResult').text("");
        $('#timeCloseResult').text("");
        $('#timeProviderName').text("");
        $('#timeOpenResult').text($(this).attr('data-opentime'));
        $('#timeCloseResult').text($(this).attr('data-closetime'));
        $('#timeProviderName').text($(this).attr('data-market-name'));
    });

});

</script>

</body>

</html>
