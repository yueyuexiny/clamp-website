/* =================================
 ===  Bootstrap Fix              ====
 =================================== */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    );
    document.querySelector('head').appendChild(msViewportStyle);
}

$('[data-toggle="collapse"]').on('click', function (e) {
    e.preventDefault();
});

$(document).ready(function () {
    $('#requestForm').validate();
});