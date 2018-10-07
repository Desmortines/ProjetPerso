$(document).ready(function(){
    function checkSatishRajTreeCollaps() {
        $(".satishraj-tree-container li.tree-li").removeClass("is-child")
        $(".satishraj-tree-container li.tree-li").each(function () {
            if ($(this).find("ul.tree-ul li").length > 0) {
                $(this).addClass("is-child")
            }
        });

        $(".satishraj-tree-container li.tree-li span.text").unbind("click");
        $(".satishraj-tree-container li.tree-li.is-child span.text").click(function () {
            $(this).parent(".tree-li").toggleClass("diactive");
            $(this).parent(".tree-li").find(".tree-ul:first").toggleClass("diactive");
        });
    }

    checkSatishRajTreeCollaps()

});