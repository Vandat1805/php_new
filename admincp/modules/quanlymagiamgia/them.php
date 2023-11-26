<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THEM MA GIAM GIA
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="modules/quanlymagiamgia/xuly.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">TEN MA GIAM GIA</label>
                                    <input name="coupon_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ten Danh Muc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">MA GIAM GIA</label>
                                    <input name="coupon_code" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SO LUONG MA</label>
                                    <input name="coupon_time" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">TINH NANG MA</label>
                                <select  name="coupon_condition" class="form-control input-sm m-bot15">
                                    <option value="0">----Chon------</option>
                                    <option value="1">Giam theo phan tram</option>
                                    <option value="2">Giam theo tien</option>
                                </select>
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NHAP SO % HOAC TIEN GIAM</label>
                                    <input name="coupon_number" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <button type="submit" name="add_coupon" class="btn btn-info">Them Ma Giam Gia</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div>