<?php

if(isset($event))
{echo '<div id="error">The name field must be filled in.</div><hr />'; }
?>
<h4>Edit Credit Listing</h4>

        <form name="positionform" action="<?php echo SITE_URL; ?>/admin/index.php/Credits" method="post" enctype="multipart/form-data">
            <table width="80%" cellpadding="15px">
            <tr>
                <td>Credit Name</td>
                <td><input type="text" name="name" style="width: 350px;"
                           <?php
                                echo 'value="'.$credit->name.'"';
                           ?>
                           >
                </td>
            </tr>
            <tr>
                <td>Link <br />ex: http://www.mysite.com</td>
                <td><input type="text" name="link" style="width: 350px;"
                           <?php
                                echo 'value="'.$credit->link.'"';
                           ?>
                           >
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" rows="4" cols="42"><?php
                                echo $credit->description;
                           ?></textarea></td>
            </tr>
            <tr>
                <td>Link To Image<br />ex: http://www.mysite.com/pic.png</td>
                <td><input type="text" name="image" style="width: 350px;"
                           <?php
                                echo 'value="'.$credit->image.'"';
                           ?>
                           ></td>
            </tr>
            <tr>
                <td>Active Credit?<br />Inactive credits will not show in public view.</td>
                <td>
                    <select name="active">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="action" value="save_edit_credit" />
                    <input type="hidden" name="id" value="<?php echo $credit->id; ?>" />
                    <input type="submit" value="Edit Credit Listing">
                </td>
            </tr>
                </table>
        </form>
