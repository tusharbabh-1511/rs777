<?php
include_once('themes/header.php');
?>

<!-- start of tools-use -->
<section class="tools-use-section has-shapes bg-light-gray has-bg-brash bg-brash-y"
         style="padding:40px 0px !important; background-image: url(../images/brushes/section-top.svg), url(../images/brushes/section-bottom.svg);">
    <div class="container" style="padding:40px 0px !important;">
        <h1 class="h1 mb-20" style="text-align: center" id="ChartHeading">Pana Chart | Panel Chart</h1>
        <span style="display: block;text-align: center;margin: 16px" id="ChartSubHeading">Panel Chart Satta Matka Record Old History Historical Data Bracket Results Chart Online Live Book Digits Numbers</span>
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-5 col-md-8 col-sm-10 mb-5" style="text-align: center">
                <a id="goToBottom" onclick="window.scrollTo(0, ($('#goToTop').offset().top - $(window).height() + 50))">
                    <button class="btn btn-sm btn-outline-primary" style="width: 160px">Go To Bottom</button>
                </a>
            </div>
        </div>
        <table class="table t-cell" style="max-width: 800px; width: 100%; margin: auto" id="chartTable">
            <thead>
            <tr>
                <th class="ch">Date</th>
                <th class="ch">Mon</th>
                <th class="ch">Tue</th>
                <th class="ch">Wed</th>
                <th class="ch">Thu</th>
                <th class="ch">Fri</th>
                <th class="ch">Sat</th>
                <th class="ch">Sun</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8">
                        <div class="loader row justify-content-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- end of tools-use -->

<div class="container">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-5 col-md-8 col-sm-10 mb-5 mt-5" style="text-align: center">
                <a onclick="history.back()">
                    <button class="btn btn-sm btn-outline-primary" style="width: 130px">Back</button>
                </a>
                <a id="goToTop" onclick="window.scrollTo(0, ($('#goToBottom').offset().top - 30))">
                    <button class="btn btn-sm btn-outline-primary" style="width: 130px">Go To Top</button>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    function initialize()
    {
        let urlParams = new URLSearchParams(window.location.search); // Get URL parameters
        let id = urlParams.get("Id");
        if(id)
        {
            getSpecificMarketinfo(id, chart = "PANACHART");
        }
        else
        {
            console.error("Chart id not found in url.");
        }
    }
    $(document).ready(function () {
        initialize();
    });
</script>
<?php include_once('themes/footer.php'); ?>
