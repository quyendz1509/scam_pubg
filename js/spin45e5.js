const ItemType_Card = 0;
const ItemType_Voucher = 1;
const ItemType_Coupon = 2;
const ItemType_UC = 3;

var hieu_ung = {
    'el': '#img_quay',
    'stop_point': null,
    'interval_id': null,
    'rotate_count': 5,
    'old_point': {
        'check': false,
        'value_old': null,
        'value_new': null
    },

    'play': function () {
        if (!this.stop_point)
            return;
        if (this.old_point.value_old == null) {
            this.old_point.value_old = this.old_point.value_new;
        }

        $(this).css('-webkit-transform', 'rotate(' + this.old_point.value_old + 'deg)');
        $(this).css('-moz-transform', 'rotate(' + this.old_point.value_old + 'deg)');
        $(this).css('transform', 'rotate(' + this.old_point.value_old + 'deg)');

        var v_old = this.old_point.value_old;
        var v_stop = this.stop_point;
        var element = this.el;
        var v_this = this;

        $(this.el).animate({
            transform: v_stop
        }, {
                step: function (now, fx) {
                    fx.start = v_old;
                    if (now >= v_old) {
                        $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
                        $(this).css('-moz-transform', 'rotate(' + now + 'deg)');
                        $(this).css('transform', 'rotate(' + now + 'deg)');
                    }
                },
                duration: 5000
            }, 'ease-out');
        //},0)

    },
    'stop': function () {
        $(this.el).stop();
    },
    'setStopPoint': function (point) {
        if (this.stop_point != null) {
            this.old_point.check = true;
        }
        // var arr_point = point;
        var valueArrPoint = point + 0;
        this.stop_point = this.rotate_count * 360 + valueArrPoint;
        if (this.old_point.check) {
            //if(this.old_point.value_old == null)
            this.old_point.value_old = this.old_point.value_new;
            this.old_point.value_new = valueArrPoint;
        } else {
            this.old_point.value_old = 0;
            this.old_point.value_new = valueArrPoint;
        }
    }
};

var isBusying = false;
var domain = $("#domain").val();
function asd(token_captche) {
    if (!isBusying) {
        isBusying = true;
        $(".my-2").addClass("d-none");
        $.ajax({
            url: domain+'spin',
            // type: 'GET',
            type: 'POST',
            data: {
                'spin_code': $("input[name=spin_code]").val(),
                'captcha': token_captche
            },
            beforeSend: function (xhr) { xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content')); },
            success: function (response) {
                setTimeout(function () {
                    // response.code = 1;
                    // response.sfadsaweqweqw = -60;
                    if (response.code == -10) {
                        $(".my-2").removeClass("d-none");
                    }
                    if (response.sfadsaweqweqw == 0) {
                        $(".my-2").removeClass("d-none");
                        $(".my-2 .text-error").html("Có lỗi hệ thống, bạn vui lòng thử lại sau.");
                        isBusying = false;
                        return;
                    }
                    if (response.code == 1) {
                        $('#spinForm').modal('toggle');
                        hieu_ung.setStopPoint(response.sfadsaweqweqw);
                        $('#ketqua').html('.');
                        hieu_ung.play();
                        setTimeout(function () {
                            isBusying = false;
                            // $("#messageSpin .style-message").html(response.msg);
                            // $("#messageSpin").modal();
                            switch(response.type){
                                case ItemType_UC:
                                    $("#ucGift").modal();
                                    break;
                                case ItemType_Coupon:
                                    $("#ingameGift").modal();
                                    $("#ingameGift .resp-msg b").text(response.name);
                                    $("#ingameGift .code").text(response.coupon);
                                    $("#ingameGift .btn-copy").removeClass('d-none');
                                    $("#ingameGift .gift").attr("src", domain+response.image);
                                    break;
                                case ItemType_Voucher:
                                    $("#voucherGift").modal();
                                    break;
                                case ItemType_Voucher:
                                    $("#cardGift").modal();
                                    break;
                                default:
                                    break;
                            }
                            $("input[name=spin_code]").val("");

                            window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({'event': 'redeemtion'});
                            
                            // if (response.dds && response.dds < 5) {
                            //     $('.btnSubmitSpinModal').unbind('click').click(function () {
                            //         $("#updateProfile").modal();
                            //     })
                            // } else {
                            //     $('.btnSubmitSpinModal').unbind('click');
                            // }
                        }, 5000);
                    } else {
                        // $("#messageSpin .style-message").html(response.msg);
                        // $("#messageSpin").modal();
                        $(".my-2").removeClass("d-none");
                        $(".my-2 .text-error").html(response.msg);
                        isBusying = false;
                    }
                }, 0)

            },
            fail: function () {
                isBusying = false;
            },
            complete: function () { 
                isBusying = false;
            }
        });
    }
}
$(document).ready(function () {
    $("#spinForm .btn_quay").click(function () {
        console.log('aa');
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le4fv4UAAAAAM1f7Z6h4qIADtjJEpS4FZREXBuB', {action: 'submit'}).then(function(token) {
                asd(token);
            });
        });
    })
});