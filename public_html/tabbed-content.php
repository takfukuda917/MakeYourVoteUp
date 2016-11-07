<?php include 'partials/header.php';?>

<ul id="tabs">
    <li class="active">Tab 1</li>
    <li>Tab 2</li>
    <li>Tab 3</li>
    <li>Tab 4</li>
    <li>Tab 5</li>
</ul>
<ul id="tab">
    <li class="active">
        <h2>This is the first tab</h2>
    </li>
    <li>
        <h2>This is the second tab</h2>
    </li>
    <li>
        <h2>Tab number three wee hee</h2>
    </li>
    <li>
        <h2>Fourth tab not bad</h2>
    </li>
    <li>
        <h2>Tab number five here we go!</h2>
    </li>
</ul>

<script>
$(document).ready(function(){
    $("ul#tabs li").click(function(e){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $("ul#tabs li.active").removeClass("active");
            $(this).addClass("active");
            $("ul#tab li.active").removeClass("active");
            $("ul#tab li:nth-child("+nthChild+")").addClass("active");
        }
    });
});
</script>

    <?php include 'partials/footer.php';?>
