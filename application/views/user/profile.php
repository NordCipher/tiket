<!-- Dashboard Counts Section-->
<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4"><i class="fa fa-user"></i> <?= $title ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 p-2">
                            <div class="row ">
                                <div class="col-md-3  font-weight-bold">Име</div>
                                <div class="col-md-9"><?= $user_details['name'] ?></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3  font-weight-bold">Емаил</div>
                                <div class="col-md-9"><?= $user_details['email'] ?></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3  font-weight-bold">Мобилен</div>
                                <div class="col-md-9"><?= $user_details['mobile'] ?></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3  font-weight-bold">Корисничко име</div>
                                <div class="col-md-9"><?= $user_details['username'] ?></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3 font-weight-bold">Вид на корисник</div>
                                <div class="col-md-9"><span class="user-type" data-value="<?= $user_details['type'] ?>"></span></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3  font-weight-bold">Креиран</div>
                                <div class="col-md-9"><span class="rel-time" data-value="<?= $user_details['created'] ?>000"></span></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3  font-weight-bold">Последна промена</div>
                                <div class="col-md-9"><span class="rel-time" data-value="<?= $user_details['updated'] ?>000"></span></div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="row">
                                <div class="col-md-3  font-weight-bold">OneDrive terms and conditions</div>
								<div class="col-md-9"><span><?= $user_details['onedrive'] ?></span></div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12 p-2">
                            <div class="row p-2 ">
                                <a href="<?= BASE_URL ?>user/change_password" class="btn btn-secondary pull-right mr-3">Смени лозинка</a>
                                <!-- <a href="<?= BASE_URL ?>user/profile_update" class="btn btn-success pull-right">Update Profile</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>