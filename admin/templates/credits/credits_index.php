<h3>Current Credits</h3>
<table width="100%" border="1px">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Link</th>
        <th>Description</th>
        <th>Status</th>
        <th>Edit</td>
        <th>Delete</th>
    </tr>
    <?php
    if($credits)
    {
        foreach($credits as $credit)
        {
            if($credit->active == '1')
            {$status = 'Active';}
            else
            {$status = 'Inactive';}
            echo '<tr>';
            if($credit->image != '')
            {echo '<td><img src="'.$credit->image.'" alt="'.$credit->name.'" style="max-height: 100px; max-width: 200px;" /></td>';}
            else
            {echo '<td>No Image</td>';}
            echo '<td>'.$credit->name.'</td>';
            if($credit->link != '')
            {echo '<td>'.$credit->link.'</td>';}
            else
            {echo '<td>No Link</td>';}
            echo '<td width="50%">'.$credit->description.'</td>';
            echo '<td>'.$status.'</td>';
            echo '<td align="center"><a href="'.adminurl('/credits/edit_credit').'/'.$credit->id.'">Edit</a></td>';
            echo '<td align="center"><a href="'.adminurl('/credits/delete_credit').'/'.$credit->id.'"
                onclick="return confirm(\'Are you sure you want to delete this credit?\')">Delete</a></td>';
            echo '</tr>';
        }
    }
    else
    {echo '<tr><td colspan="7">There are no credits configured</td></tr>';}

?>
</table>