<?php
/*
    WebMole, an automated explorer and tester for Web 2.0 applications
    Copyright (C) 2012-2013 Gabriel Le Breton, Fabien Maronnaud,
    Sylvain Hallé et al.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/* Prevent direct access to this file. */
if ($access != 'authorized')
	die('You are not allowed to view this file');
?>
<div class="controls spacer web-explorer web-explorer-automatic-option" id="web-explorer-automatic-option-computed">
	 <label><input type="checkbox" id="web-explorer-compute-style" onclick="webExplorer_showComputeStyles();"/> Compute styles</label>
     <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet aliquam tellus. Morbi aliquam sollicitudin posuere. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum at diam lorem, ac consequat nibh. Phasellus commodo vulputate tellus. Mauris vel felis ipsum. Etiam non dolor justo, in rutrum justo. Fusce pulvinar aliquet facilisis. Etiam quis elit non leo luctus adipiscing non vitae nibh. Proin vitae facilisis lacus. Mauris cursus mollis lorem, eu convallis ligula placerat vitae.</p>    
    <div id="web-explorer-compute-style-list">
    	<span><a onclick="webExplorer_selectAllCheckbox('web-explorer-compute-style','true');">Select all</a> / <a onclick="webExplorer_selectAllCheckbox('web-explorer-compute-style','false');">unselect all</a></span>
        <table class="table table-condensed">
            <tr>
                <th style="text-align:center;">Select</th>
                <th>Style</th>
                <th style="text-align:center;">Select</th>
                <th>Style</th>
            </tr>
            <?php
                $cssToCompute_nbProperties = 0;
                $cssToCompute_array = $CONFIG['Styles_to_compute'];
                reset($cssToCompute_array);
                while (list($key, $val) = each($cssToCompute_array)) {
                    $cssToCompute_nbProperties++;
                    $cssToCompute_params = explode(',',$key);
                    $cssToCompute_name = $cssToCompute_params[0];
                    if($cssToCompute_params[1]=='true'){
                        $cssToCompute_checked = ' checked="checked"';
                    }
                    else{
                        $cssToCompute_checked = '';
                    }
                    if( $cssToCompute_nbProperties == 1 ){					
                        echo '<tr>';
                        echo '<td style="text-align:center;">';
                        echo '<input type="checkbox" class="web-explorer-compute-style" '.$cssToCompute_checked.' style-name="'.$cssToCompute_name.'"/>';
                        echo '</td>';
                        echo '<td>'.$cssToCompute_name.'</td>';				
                    }
                    else if( $cssToCompute_nbProperties == 2 ){					
                        echo '<td style="text-align:center;">';
                        echo '<input type="checkbox" class="web-explorer-compute-style" '.$cssToCompute_checked.' style-name="'.$cssToCompute_name.'"/>';
                        echo '</td>';
                        echo '<td>'.$cssToCompute_name.'</td>';
                        echo '</tr>';		
                    }
                    if($cssToCompute_nbProperties == 2){
                        $cssToCompute_nbProperties = 0;
                    }
                }
                
                if($cssToCompute_nbProperties == 1){
                    echo '<td>&nbsp;</td>';
                    echo '<td>&nbsp;</td>';
                    echo '</tr>';			
                }
            ?>
         </table>
     </div>    
</div>