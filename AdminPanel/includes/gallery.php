<button id="add-pic" class="add-btn">+ Add New</button>
<div class="row">


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
						$output .=  '<td class="col-md-6">'."$file".'</td>';
						$output .=  '<td class="col-md-2"><div class="center"><image src='."$dir"."/"."$file".' class="img img-responsive"></div></td>';
					    $output .=  '<td class="col-md-4 pull-right"><i class="fa fa-trash delete-pic" data-pic='."$file".' aria-hidden="true"></i></td>';
         				$output .=  '</tr>';
						
					echo $output;
					
					
				}
				closedir($dh);
			  }
			}
			
			
			
			?>
			
			            
	</tbody>
</table>


</div>