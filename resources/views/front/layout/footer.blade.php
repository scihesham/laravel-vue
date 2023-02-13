<div class="footer">
    <div class="container-fluid {{app()->getLocale() == 'ar' ? 'dir-ar' : 'dir-en'}}">
        <div style="position: absolute; bottom: 57px;" class="{{app()->getLocale() == 'ar' ? 'right-0' : 'left-0'}}">
            <img src="{{ url('design/front/images/khabeer-text-logo.png') }}" alt="">
        </div>
        <div class="prices {{app()->getLocale() == 'ar' ? 'left-0' : 'right-0'}}">
            <span>(+)</span>
            <input id="priceFare" type="number">
            <span>{{trans('lang.price_in_ryal')}}</span>
            <div class="prices-carat">24</div>
            <span class="prices-text" id="price24"></span>
            <div class="prices-carat">22</div>
            <span class="prices-text" id="price22"></span>
            <div class="prices-carat">21</div>
            <span class="prices-text" id="price21"></span>
            <div class="prices-carat">18</div>
            <span class="prices-text" id="price18"></span>
        </div>
    </div>

    <div class="container-fluid">
        <div style="position: absolute; width: 200px; left: calc(50% - 150px);">
            <input id="colorpicker" data-jscolor="" style="visibility: hidden">
        </div>
        <div class="row">
            <div class="col-md-10 text-right">
                <div class="phone">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="input-search" style="">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2 text-left">
                <div class="mail">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $fileVersion = 0.260; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="{{ url('design/front') }}/js/ajax/add-id-def-branch.js?n=<?php echo $fileVersion; ?>"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ url('vendor/jquery/js') }}/jquery-ui.js"></script>
<script src="{{ url('design/front') }}/plugins/color-picker/jscolor.js"></script>
<script src="{{ url('design/front') }}/plugins/selectboxit/jquery.selectBoxIt.min.js"></script>
<script src="{{ url('design') }}/auto-complete-multiple-select/select-pure.min.js?n=<?php echo $fileVersion; ?>"></script>

<script src="{{ url('design/front') }}/js/ajax/color-change.js?n=<?php echo $fileVersion; ?>"></script>
<script src="{{ url('design/front') }}/js/chosenform.js?n=<?php echo $fileVersion; ?>"></script>
<script src="{{ url('design/front') }}/js/ajax/setup.js?n=<?php echo $fileVersion; ?>"></script>
<script src="{{ url('design/front') }}/js/ajax/setup-account-guide.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-account-connect.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/sanad-kabd.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/sanad-sarf.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/purchases-recieving.js?n=<?php echo $fileVersion; ?>" async></script>
{{-- @if (auth()->user()->hasPermissionTo('show-sales-custom-payments-modal')) --}}
    <script src="{{ url('design/front') }}/js/ajax/custom/sales.js?n=<?php echo $fileVersion; ?>" async></script>
{{--@else --}}
   <!-- <script src="{{ url('design/front') }}/js/ajax/sales.js?n=<?php //echo $fileVersion; ?>" async></script> -->
{{--@endif --}}
<script src="{{ url('design/front') }}/js/ajax/sales-back.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/purchases-back.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/accounts-elkyood.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-currency.js?n=<?php echo $fileVersion; ?>" async>
</script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-branch.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-definition.js?n=<?php echo $fileVersion; ?>" async>
</script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-kind.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-country.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-company.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-unit.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-sales.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-purchase.js?n=<?php echo $fileVersion; ?>" async>
</script>
<script src="{{ url('design/front') }}/js/ajax/setup-general-setting-options.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/update-gold-price.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/abbreviation.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/myzan.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/harakat-alyoumia.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/general-address.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/update-arsdt-elasnaf.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/rased-eftta7y.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/users.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/buying-calibration.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/selling-calibration.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/ast3rad.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/financial-statements.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/invoice-screen-assumptions.js?n=<?php echo $fileVersion; ?>" async></script>

<script src="{{ url('design/front') }}/js/ajax/convert.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/balance-bar.js?n=<?php echo $fileVersion; ?>" async></script>
@if(auth()->user())
<script src="{{ url('design/front') }}/js/ajax/sync-local.js?n=<?php echo $fileVersion; ?>" async></script>
@endif
<!-- warehouse -->
<script src="{{ url('design/front') }}/js/ajax/warehouse-item-card.js?n=<?php echo $fileVersion; ?>" async></script>

<!-- reports -->
<script src="{{ url('design/front') }}/js/report/list-account.js?n=<?php echo $fileVersion; ?>" async></script>
<!-- mowardon -->
<script src="{{ url('design/front') }}/js/ajax/mowardon.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/customers.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/helper_functions.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/custom.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/ajax/custom/choose-payment.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('js/qrcode') }}/qrcode.min.js?n=<?php echo $fileVersion; ?>"></script>
<script src="{{ url('js') }}/qr-print.js?n=<?php echo $fileVersion; ?>"></script>
<script src="{{ url('js') }}/printThis.js?n=<?php echo $fileVersion; ?>"></script>
<script src="{{ url('design/front') }}/js/prices-api.js?n=<?php echo $fileVersion; ?>" async></script>
<script src="{{ url('design/front') }}/js/screenfull.min.js" async></script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#main-content-div').removeClass('none');
        $('#loading-content').addClass('none');
        $('#update_gold_price_modal').modal('show');
    });
</script>


@yield('footer')

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {
        $("select").on("select2:clear", function(evt) {
            $(this).on("select2:opening.cancelOpen", function(evt) {
                evt.preventDefault();

                $(this).off("select2:opening.cancelOpen");
            });
        });

        $(document).on('change', function(e) {
            $("select").on("select2:clear", function(evt) {
                $(this).on("select2:opening.cancelOpen", function(evt) {
                    evt.preventDefault();

                    $(this).off("select2:opening.cancelOpen");
                });
            });
        })
    });
</script>
</div> <!-- end id main-content-div -->
<div id="loading-content">
    <span class="loader"></span>
    <div class="" id="generated-qrcodes"></div>
    <div class="" id="qrcode-image"></div>
</div>
</body>

</html>
