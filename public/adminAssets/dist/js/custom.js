$(document).on("click", ".message-action-delete", function(){

    var id=$(this).attr('data-item-id');
    var subject=$(this).attr('data-item-subject');

    $('#idToDelete').text(subject);
    $('#messageId').val(id);
});

$(document).on("click", ".message-btn-delete", function(){

    var id=$(this).attr('data-item-id');
    var subject=$(this).attr('data-item-subject');

    $('#idToDelete').text(subject);
    $('#messageId').val(id);
});

$(document).on("click", ".message-action-delete", function(){

    var id=$(this).attr('data-item-id');
    var subject=$(this).attr('data-item-subject');

    $('#idToDelete').text(subject);
    $('#messageId').val(id);
});


$(document).on("click", ".product-action-delete", function(){

    var id=$(this).attr('data-product-id');
    var name=$(this).attr('data-product-name');

    $('#nameToDelete').text(name);
    $('#productId').val(id);
});

$(document).on("click", ".btn-delete-product", function(){

    var id=$(this).attr('data-product-id');
    var name=$(this).attr('data-product-name');

    $('#nameToDelete').text(name);
    $('#productId').val(id);
});

setTimeout(function() {
    $('#staticNotify').fadeOut('slow');
}, 2000); // <-- time in milliseconds

setTimeout(function() {
    $('#staticErrorNotify').fadeOut('slow');
}, 2000); // <-- time in milliseconds


//$(document).on("click", ".item-action-edit", function(){
//
//    var id=$(this).attr('data-item-id');
//    var name=$(this).attr('data-item-name');
//    var img=$(this).attr('data-item-img');
//    var imgStatus=$(this).attr('data-img-status');
//
//    $('#modalItemId').val(id);
//    $('#modalItemName').val(name);
//
//    if(imgStatus == 'no'){
//        $("#displayImg").css({"display":"none"});
//        $("#imgHandling").css({"display":"none"});
//    }
//
//    else{
//        $('#modalItemImg').attr('src',img);
//
//        $('#changeImg').change(function(event){
//            var tmppath = URL.createObjectURL(event.target.files[0]);
//            $("#modalItemImg").fadeIn("slow").attr('src',URL.createObjectURL(event.target.files[0]));
//        });
//
//        $('#removeImg').click(function(){
//            $("#changeImg").val("");
//            $("#modalItemImg").fadeIn("slow").attr('src','');
//            $("#delStatus").val('yes');
//        });
//
//        $('#resetImg').click(function(){
//            $("#changeImg").val("");
//            $("#modalItemImg").fadeIn("slow").attr('src',img);
//            $("#delStatus").val('no');
//        });
//    }
//});
//
//$(document).on("click", ".item-action-delete", function(){
//    var id=$(this).attr('data-item-id');
//
//    $('#idToDelete').text(id);
//});
//
//$(document).on("click", ".shop-action-delete", function(){
//    var id=$(this).attr('data-item-id');
//
//    $('#idToDelete').text(id);
//});
//
//$('[hint="tooltip"]').tooltip();
//
//$(document).on("click", "#openNotify", function(){
//
//    $('#notify').slideDown('medium').delay(1000)
//        .slideUp('medium');
//});
//
//$(document).on("click", ".fabric-action-edit", function(){
//
//    var id=$(this).attr('data-item-id');
//    var number=$(this).attr('data-item-number');
//    var img=$(this).attr('data-item-img');
//    var stock=$(this).attr('data-fabric-stock');
//
//    $('#modalFabricId').val(id);
//    $('#modalfabricNum').val(number);
//    $('#modalFabricImg').attr('src',img);
//    $('#mfabricStock').val(stock);
//
//    $('#fmchangeImg').change(function(event){
//        var tmppath = URL.createObjectURL(event.target.files[0]);
//        $("#modalFabricImg").fadeIn("slow").attr('src',URL.createObjectURL(event.target.files[0]));
//    });
//
//    $('#removeFabricImg').click(function(){
//        $("#fmchangeImg").val("");
//        $("#modalFabricImg").fadeIn("slow").attr('src','');
//    });
//
//    $('#resetFabricImg').click(function(){
//        $("#fmchangeImg").val("");
//        $("#modalFabricImg").fadeIn("slow").attr('src',img);
//    });
//});
//
//$(document).on("click", ".fabric-action-delete", function(){
//    var id=$(this).attr('data-fabric-id');
//    $('#fabricIdToDelete').text(id);
//});
//
//$(document).on("click", ".lining-action-edit", function(){
//
//    var id=$(this).attr('data-item-id');
//    var number=$(this).attr('data-lining-number');
//    var img=$(this).attr('data-item-img');
//    var stock=$(this).attr('data-lining-stock');
//
//    $('#modalLiningId').val(id);
//    $('#modalLiningNum').val(number);
//    $('#modalLiningImg').attr('src',img);
//    $('#mliningStock').val(stock);
//
//    $('#lmchangeImg').change(function(event){
//        var tmppath = URL.createObjectURL(event.target.files[0]);
//        $("#modalLiningImg").fadeIn("slow").attr('src',URL.createObjectURL(event.target.files[0]));
//    });
//
//    $('#removeLiningImg').click(function(){
//        $("#lmchangeImg").val("");
//        $("#modalLiningImg").fadeIn("slow").attr('src','');
//    });
//
//    $('#resetLiningImg').click(function(){
//        $("#lmchangeImg").val("");
//        $("#modalLiningImg").fadeIn("slow").attr('src',img);
//    });
//});
//
//$(document).on("click", ".lining-action-delete", function(){
//    var id=$(this).attr('data-lining-id');
//    $('#liningIdToDelete').text(id);
//});
//
//
//$(document).on("click", ".garment-action-edit", function(){
//
//    var id=$(this).attr('data-garment-id');
//    var name=$(this).attr('data-garment-name');
//    var fabricConsumption=$(this).attr('data-fabric-consumption');
//    var liningConsumption=$(this).attr('data-lining-consumption');
//
//    $('#modalGarmentId').val(id);
//    $('#mGarmentName').text(name);
//    $('#mfabricConsumption').val(fabricConsumption);
//    $('#mliningConsumption').val(liningConsumption);
//});
//
//$(document).on("click", ".base-size-action-edit", function(){
//
//    var id=$(this).attr('data-bs-id');
//    var baseSize=$(this).attr('data-bs-bs');
//    var garment=$(this).attr('data-bs-garment');
//
//    $('#mBSId').val(id);
//    $('#mBSize').val(baseSize);
//    $('#mBSGarment').val(garment);
//});
//
//$(document).on("click", ".base-size-action-delete", function(){
//    var id=$(this).attr('data-bs-id');
//    $('#baseSizeIdToDelete').text(id);
//});
//
//$(document).on("click", ".base-pattern-action-edit", function(){
//
//    var id=$(this).attr('data-basep-id');
//    var basePattern=$(this).attr('data-base-pattern');
//    var garment=$(this).attr('data-basep-garment');
//
//    $('#mBasePId').val(id);
//    $('#mBPattern').val(basePattern);
//    $('#mBasePGarment').val(garment);
//});
//
//$(document).on("click", ".base-pattern-action-delete", function(){
//
//    var id=$(this).attr('data-basep-id');
//    $('#basePatternIdToDelete').text(id);
//
//});
//
//$(document).on("click", "#showUserPassword", function() {
//    $('#adminPasswordDiv').slideUp('medium');
//    $('#passwordDiv').slideDown('medium');
//});
//
//
//$(document).on("click", ".fabric-label-action-view", function(){
//
//    var id=$(this).attr('data-fl-id');
//    var name=$(this).attr('data-fl-name');
//    var mtm3suit=$(this).attr('data-fl-mtm-thre-suit');
//    var mtm2suit=$(this).attr('data-fl-mtm-two-suit');
//    var mtmJacket=$(this).attr('data-fl-mtm-jacket');
//    var mtmPant=$(this).attr('data-fl-mtm-pant');
//    var mtmWC=$(this).attr('data-fl-mtm-wc');
//    var mtmShirt=$(this).attr('data-fl-mtm-shirt');
//    var bs3suit=$(this).attr('data-fl-bs-thre-suit');
//    var bs2suit=$(this).attr('data-fl-bs-two-suit');
//    var bsJacket=$(this).attr('data-fl-bs-jacket');
//    var bsPant=$(this).attr('data-fl-bs-pant');
//    var bsWC=$(this).attr('data-fl-bs-wc');
//    var bsShirt=$(this).attr('data-fl-bs-shirt');
//
//    $('#mFLID').text(id);
//    $('#mFLName').text(name);
//    $('#mFLMTMTHP').text(mtm3suit);
//    $('#mFLMTMTWP').text(mtm2suit);
//    $('#mFLMTMJacket').text(mtmJacket);
//    $('#mFLMTMPant').text(mtmPant);
//    $('#mFLMTMWC').text(mtmWC);
//    $('#mFLMTMShirt').text(mtmShirt);
//    $('#mFLBSTHP').text(bs3suit);
//    $('#mFLBSTWP').text(bs2suit);
//    $('#mFLBSJacket').text(bsJacket);
//    $('#mFLBSPant').text(bsPant);
//    $('#mFLBSWC').text(bsWC);
//    $('#mFLBSShirt').text(bsShirt);
//});
//
//$(document).on("click", ".fabric-label-action-edit", function(){
//
//    var id=$(this).attr('data-fl-id');
//    var name=$(this).attr('data-fl-name');
//    var mtm3suit=$(this).attr('data-fl-mtm-thre-suit');
//    var mtm2suit=$(this).attr('data-fl-mtm-two-suit');
//    var mtmJacket=$(this).attr('data-fl-mtm-jacket');
//    var mtmPant=$(this).attr('data-fl-mtm-pant');
//    var mtmWC=$(this).attr('data-fl-mtm-wc');
//    var mtmShirt=$(this).attr('data-fl-mtm-shirt');
//    var bs3suit=$(this).attr('data-fl-bs-thre-suit');
//    var bs2suit=$(this).attr('data-fl-bs-two-suit');
//    var bsJacket=$(this).attr('data-fl-bs-jacket');
//    var bsPant=$(this).attr('data-fl-bs-pant');
//    var bsWC=$(this).attr('data-fl-bs-wc');
//    var bsShirt=$(this).attr('data-fl-bs-shirt');
//
//    $('#mValFLId').val(id);
//    $('#mlabelFName').val(name);
//    $('#mFpriceFor3SuitMTM').val(mtm3suit);
//    $('#mFpriceFor2SuitMTM').val(mtm2suit);
//    $('#mFpriceForJacketMTM').val(mtmJacket);
//    $('#mFpriceForTrouserMTM').val(mtmPant);
//    $('#mFpriceForWCMTM').val(mtmWC);
//    $('#mFpriceForShirtMTM').val(mtmShirt);
//    $('#mFpriceFor3SuitBS').val(bs3suit);
//    $('#mFpriceFor2SuitBS').val(bs2suit);
//    $('#mFpriceForJacketBS').val(bsJacket);
//    $('#mFpriceForTrouserBS').val(bsPant);
//    $('#mFpriceForWCBS').val(bsWC);
//    $('#mFpriceForShirtBS').val(bsShirt);
//});
//
//$(document).on("click", ".fabric-label-action-delete", function(){
//
//    var id=$(this).attr('data-fl-id');
//    $('#fabricLabelIdToDelete').text(id);
//
//});
//
//
//$(document).on("click", ".lining-label-action-view", function(){
//
//    var id=$(this).attr('data-ll-id');
//    var name=$(this).attr('data-ll-name');
//    var suit3=$(this).attr('data-ll-3-suit');
//    var suit2=$(this).attr('data-ll-2-suit');
//    var jacket=$(this).attr('data-ll-jacket');
//    var trouser=$(this).attr('data-ll-trouser');
//    var wC=$(this).attr('data-ll-wc');
//    var shirt=$(this).attr('data-ll-shirt');
//
//    $('#mLLID').text(id);
//    $('#mLLName').text(name);
//    $('#mLLTHP').text(suit3);
//    $('#mLLTWP').text(suit2);
//    $('#mLLJacket').text(jacket);
//    $('#mLLPant').text(trouser);
//    $('#mLLWC').text(wC);
//    $('#mLLShirt').text(shirt);
//});
//
//$(document).on("click", ".lining-label-action-edit", function(){
//
//    var id=$(this).attr('data-ll-id');
//    var name=$(this).attr('data-ll-name');
//    var suit3=$(this).attr('data-ll-3-suit');
//    var suit2=$(this).attr('data-ll-2-suit');
//    var jacket=$(this).attr('data-ll-jacket');
//    var trouser=$(this).attr('data-ll-trouser');
//    var wC=$(this).attr('data-ll-wc');
//    var shirt=$(this).attr('data-ll-shirt');
//
//    $('#mValLLId').val(id);
//    $('#mlabelLName').val(name);
//    $('#mLpriceFor3Suit').val(suit3);
//    $('#mLpriceFor2Suit').val(suit3);
//    $('#mLpriceForJacket').val(jacket);
//    $('#mLpriceForTrouser').val(trouser);
//    $('#mLpriceForWC').val(wC);
//    $('#mLpriceForShirt').val(shirt);
//});
//
//$(document).on("click", ".lining-label-action-delete", function(){
//
//    var id=$(this).attr('data-ll-id');
//    $('#liningLabelIdToDelete').text(id);
//
//});