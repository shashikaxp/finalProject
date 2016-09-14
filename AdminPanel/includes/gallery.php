<button id="add-pic" class="add-btn">+ Add New</button>

<table id="gallery_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th class="center">Thumbnail</th>                
				<th></th>
			
            </tr>
        </thead>
        <tbody>
			
			
			
			
			<?php
			
		   $dir = "gallery-images";

			// Open a directory, and read its contents
			if (is_dir($dir)){
			  if ($dh = opendir($dir)){
				while (($file = readdir($dh)) !== false){
				if ($file == '.' or $file == '..') continue;
						$output  =	'<tr>';
						$output .=  '<td>'."$file".'</td>';
						$output .=  '<td><div class="container center"><image src='."$dir"."/"."$file".' class="img img-responsive col-md-4 col-md-offset-4 "></div></td>';
					    $output .=  '<td><i class="fa fa-trash delete-pic" data-pic='."$file".' aria-hidden="true"></i></td>';
         				$output .=  '</tr>';
						
					echo $output;
					
					
				}
				closedir($dh);
			  }
			}
			
			
			
			?>
			
			            
	</tbody>
</table>


