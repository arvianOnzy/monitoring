<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Asset</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="vendors/iconly/bold.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="wrapper">
        <div class="container-fluid">
            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    <div class="page-heading mt-5">
                        <h3>Monitoring Asset</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <fieldset class="form-group">
                                <input type="text" style="border-radius: 10px;" class="form-control" id="basicInput"
                                    placeholder="Cari...">
                            </fieldset>
                        </div>
                        <div class="col-md-1 mb-4 ms-auto">
                            <fieldset class="form-group">
                                <select class="form-select" style="border-radius: 10px;" id="basicSelect">
                                    <option>IT</option>
                                    <option>SDM</option>
                                    <option>Umum</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-2 mb-4">
                            <fieldset class="form-group">
                                <select class="form-select" style="border-radius: 10px;" id="kalender">
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="page-content">

                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-bold bi-box-arrow-in-right"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Asset Masuk</h6>
                                                <h6 class="font-extrabold mb-0">37</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-bold bi-box-arrow-right"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Asset Keluar</h6>
                                                <h6 class="font-extrabold mb-0">4</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-bold bi-folder"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Asset</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Grafik Asset</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="Chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Asset Per Unit</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">Server Migration <span
                                                class="float-right">20%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Sales Tracking <span
                                                class="float-right">40%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Customer Database <span
                                                class="float-right">60%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Payout Details <span
                                                class="float-right">80%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Account Setup <span
                                                class="float-right">Complete!</span></h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
    var colors = ['#007bff'];
    const Chart = new Chart("Chart", {
        type: 'bar',
        data: {
        labels: ["S", "M", "T", "W", "T", "F", "S"],
        datasets: [{
                data: [589, 445, 483, 503, 689, 692, 634],
                backgroundColor: colors[0],
                }]
        },
        options: {
            scales: {
                    y: {
                        beginAtZero: true
                    }
            }
        }
    });
    </script>

        <script src="js/bootstrap.bundle.min.js"></script>
        {{-- <script src="vendors/apexcharts/apexcharts.js"></script> --}}
        {{-- <script src="js/pages/dashboard.js"></script> --}}
        {{-- <script src="vendors/apexcharts/apexcharts.js"></script> --}}
        <script src="js/main.js"></script>

        <link rel="stylesheet" href="vendors/bootstrap-date-picker/docs/js/datepicker-bs4.js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" defer="defer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.4/dayjs.min.js"
            integrity="sha512-Ot7ArUEhJDU0cwoBNNnWe487kjL5wAOsIYig8llY/l0P2TUFwgsAHVmrZMHsT8NGo+HwkjTJsNErS6QqIkBxDw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" defer="defer"></script>   
</body>

</html>