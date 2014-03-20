<html>
<?PHP include 'Application/Views/Templates/Header.tpl.php';?>
    <body>
        <?PHP include 'Application/Views/Templates/Plate/ListPlate.tpl.php'; ?>
        <?PHP
            echo Application_Views_PlateView::$content;
        ?>
<?PHP include_once 'Application/Views/Templates/Footer.tpl.php';?>        
</body>
</html>
