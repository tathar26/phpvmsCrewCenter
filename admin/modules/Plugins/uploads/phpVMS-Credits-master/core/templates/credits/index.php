<h3><?php echo SITE_NAME; ?> Credits</h3>
<table width="100%">
    <?php
        foreach($credits as $credit)
        {
            echo '<tr>';
            if($credit->image != '')
            {echo '<td><img src="'.$credit->image.'" alt="'.$credit->name.'" style="max-height: 100px; max-width: 200px;" /></td>';}
            else
            {echo '<td>&nbsp;</td>';}
            if($credit->link != '')
            {echo '<td><a href="'.$credit->link.'" target="_blank">'.$credit->name.'</a></td>';}
            else
            {echo '<td>'.$credit->name.'</td>';}
            echo '<td width="50%">'.$credit->description.'</td>';
            echo '</td>';
        }
    ?>
</table>