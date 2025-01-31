<!-- Comment Section-->
<div class="container" style="padding:0; margin-top: -4em;">
    <!--Dashboard counts-->
    <section class="dashboard-header no-padding-bottom col-left-no-padding" style="margin-top: 4em;">
        <div class="container">
            <div class="row">
                <!-- Statistics -->
                <a href="<?= BASE_URL ?>tickets/list_all" class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                        <div class="icon bg-green"><i class="fa fa-tasks"></i></div>
                        <div class="text"><strong><?= $stats['total_tickets'] ?></strong><br>
                            <small>Сите тикети</small>
                        </div>
                    </div>
                </a>

                <a href="<?= BASE_URL ?>tickets/my_tickets" class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                        <div class="icon bg-orange"><i class="fa fa-ticket"></i></div>
                        <div class="text"><strong><?= $stats['open_tickets'] ?></strong><br>
                            <small>Отворени тикети</small>
                        </div>
                    </div>
                </a>

                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                        <div class="icon bg-info"><i class="fa fa-user"></i></div>
                        <div class="text"><strong><?= $stats['assigned_tickets'] ?></strong><br>
                            <small>Распределени тикети</small>
                        </div>
                    </div>
                </div>

                <a href="<?= BASE_URL ?>tickets/closed_tickets" class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                        <div class="icon bg-red"><i class="fa fa-check"></i></div>
                        <div class="text"><strong><?= $stats['closed_tickets'] ?></strong><br>
                            <small>Затворени тикети</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- recent activity -->
    <section class="feeds">
        <div class="container-fluid col-left-no-padding">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="card custom-border-radius w-100">
                        <div class="card-header d-flex align-items-center  custom-border-radius">
                            <h2 class="h3">Статус на тикети</h2>
                        </div>
                        <div class="work-amount">
                            <div class="card-body">
                                <div class="chart text-center">
                                    <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                            style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                    <div class="text"><strong><?= $stats['total_tickets'] ?></strong><br><span>Вкупно Тикети</span>
                                    </div>
                                    <canvas id="pieChart"
                                            style="display: block; width:auto; height: 100%; height: 100%"></canvas>
                                </div>
                                <div class="text-center">Отворени, Доделени и Затворени тикети </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Trending Articles-->
                <div class="col-lg-6 d-flex">
                    <div class="recent-updates card custom-border-radius  w-100">
                        <div class="card-header d-flex align-items-center  custom-border-radius">
                            <h2 class="h3">Скорешни тикети</h2>
                        </div>
                        <div class="card-header tab-card-header shadow-none">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link disabled-text  active show" id="one-tab" data-toggle="tab"
                                       href="#one" role="tab" aria-controls="One" aria-selected="true">Создадени од мене</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled-text" id="three-tab" data-toggle="tab" href="#three"
                                       role="tab" aria-controls="Three" aria-selected="false">Неодамна затворени</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel"
                                 aria-labelledby="one-tab">
                                <?php
                                if (is_array($recent['created']) && count($recent['created']) > 0) {
                                    foreach ($recent['created'] as $recent_created) {
                                        echo '
                                <div class="item d-flex  justify-content-between">
                                    <div class="info d-flex">
                                    <div class="icon"><i class="fa fa-ticket text-green"></i></div>
                                    <div class="title">
                                    <a href="' . BASE_URL . 'tickets/view_ticket/' . $recent_created['ticket_no'] . '">
                                        <h5>' . $recent_created['ticket_no'] . '</h5>
                                    </a><br>
                                    <p>Purpose: ' . $recent_created['purpose'] . '</p>
                                    <p>Subject: ' . $recent_created['subject'] . '</p>
                                    </div>
                                    </div>
                                    <div class="date text-right"><span class="rel-time" data-value="'.$recent_created['created'].'000"></span><br><span class="tik-status" data-value="'.$recent_created['status'].'"></span></div>
                                </div>
                                ';
                                    }
                                } else {
                                    echo '
                                <div class="item d-flex align-items-center">
                                <div class="text">
                                    <a href="#">
                                    <h3 class="h5">OOPS</h3>
                                    </a>
                                    <small>No record found</small>
                                </div>
                                </div>
                                ';
                                }
                                ?>
                            </div>
                            <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                <?php
                                if (is_array($recent['closed']) && count($recent['closed']) > 0) {
                                    foreach ($recent['closed'] as $recent_closed) {
                                        echo '
                                <div class="item d-flex  justify-content-between">
                                <div class="info d-flex">
                                    <div class="icon"><i class="fa fa-ticket text-red"></i></div>
                                    <div class="title">
                                    <a href="' . BASE_URL . 'tickets/view_ticket/' . $recent_closed['ticket_no'] . '">
                                        <h5>' . $recent_closed['ticket_no'] . '</h5>
                                    </a><br>
                                    <p>Purpose: ' . $recent_closed['purpose'] . '</p>
                                    <p>Subject: ' . $recent_closed['subject'] . '</p>
                                    </div>
                                    </div>
                                    <div class="date text-right"><span class="rel-time" data-value="'.$recent_closed['created'].'000"></span><br><span class="tik-status" data-value="'.$recent_closed['status'].'"></span></div>
                                </div>
                                ';
                                    }
                                } else {
                                    echo '
                                <div class="item d-flex align-items-center">
                                <div class="text">
                                    <a href="#">
                                    <h3 class="h5">OOPS</h3>
                                    </a>
                                    <small>No record found</small>
                                </div>
                                </div>
                                ';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <!-- OneDrive -->
        <div style="display: none;">    
        <?=
            $oneDriveVar = $recent['onedrive'];
            if($oneDriveVar === '0'){
                header("Location:/user/profile_update");
                //OneDrive ova moze da ne raboti
            }
        ?>
        <!-- //OneDrive -->
        </div>
    </section>
    
    <script>
        var PIECHART = $('#pieChart');
        var myPieChart = new Chart(PIECHART, {
            type: 'doughnut',
            options: {
                cutoutPercentage: 80,
                legend: {
                    display: false
                }
            },
            data: {
                labels: [
                    "Open",
                    "Assigned",
                    "Closed"
                ],
                datasets: [
                    {
                        data: [<?= $stats['open_tickets'] ?>, <?= $stats['assigned_tickets'] ?>, <?= $stats['closed_tickets'] ?>],
                        borderWidth: [0, 0, 0, 0],
                        backgroundColor: [
                            '#ffc36d',
                            "#17a2b8",
                            "#ff7676"
                        ],
                        hoverBackgroundColor: [
                            '#e2ab62',
                            "#15788d",
                            "#cc5d5d"
                        ]
                    }]
            }
        });

    </script>
</div>