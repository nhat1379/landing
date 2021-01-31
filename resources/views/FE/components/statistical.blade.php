<section class="about-counter" style="background-image: none">
    <div class="container">
        <div class="row">
            @if (!empty($web['current_client']))
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="{{ $web['current_client'] }}" data-time="4000">0</span>
                            <span>+]</span>
                        </div>
                        <h6>Số lượng khách hàng</h6>
                    </div>
                </div>
            @endif

            @if (!empty($web['experience']))
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                    <div class="ot-counter">
                        <div>
                            <span>[</span>
                            <span class="num" data-to="{{ $web['experience'] }}" data-time="2000">0</span>
                            <span>+]</span>
                        </div>
                        <h6>Kinh nghiệm làm việc</h6>
                    </div>
                </div>
            @endif
           
            @if (!empty($web['current_employee']))
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                <div class="ot-counter">
                    <div>
                        <span>[</span>
                        <span class="num" data-to="{{ $web['current_employee'] }}" data-time="2000">0</span>
                        <span>+]</span>
                    </div>
                    <h6>Số lượng nhân viên</h6>
                </div>
            </div>
            @endif

            @if (!empty($web['current_office']))
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="ot-counter">
                    <div>
                        <span>[</span>
                        <span class="num" data-to="{{ $web['current_office'] }}" data-time="2000">0</span>
                        <span>+]</span>
                    </div>
                    <h6>Số chi nhánh / văn phòng</h6>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
