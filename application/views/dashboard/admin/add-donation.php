<div class="animated fadeIn">
    <div style="justify-content: center;" class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Report User Blood Donation</strong>
                </div>
                <div class="card-body">
                    <!-- complete form -->
                    <div id="pay-invoice">
                        <div class="card-body">

                            <form action="<?= base_url() ?>Admin/report_user_blood_donation" method="post" class="form-validate">
                                <div class="form-group">
                                    <label for="user">Select user</label>
                                    <select class="form-control" name="user_id" required>
                                        <option value="">Select donor</option>
                                        <?php foreach ($allDonors as $row) { ?>
                                            <option value="<?=$row['id']?>"><?=$row['id']?> - <?=$row['user_name']?> -  <?=$row['user_phone']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Donated Date</label>
                                    <input class="form-control" type="date" name="donated_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Donated Place / Hospital</label>
                                    <input class="form-control" type="text" name="donated_place" required>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <button type="reset" class="btn btn-danger btn-lg btn-block">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                    <div class="form-group col-6">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- complete from -->

        </div>
    </div>
</div>