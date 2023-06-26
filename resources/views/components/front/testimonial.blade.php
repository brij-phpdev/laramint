<div class="testimonial-item bg-light rounded my-4">
    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>{{html_entity_decode($testimonial->testimonial_msg, ENT_NOQUOTES)}}</p>
    <div class="d-flex align-items-center">
        
        <?php
        if(!empty($testimonial->image)){
        $filepath = 'front/img/' . $testimonial->image;
        $filename = pathinfo($filepath, PATHINFO_FILENAME); 
        $new_file_path = str_replace('landing_page', '', url('front/img/'.$filename));
        ?>
         <picture>
                    <source type="image/webp" srcset="{{$new_file_path}}.webp">
                    <source type="image/png" srcset="{{$new_file_path}}.jpeg">
                    <img class="img-fluid flex-shrink-0 rounded-circle"
             src="{{  $new_file_path }}.webp"
             style="width: 65px; height: 65px;">
        </picture>
        <?php }else{
            $filename = 'img/no-image';
            $new_file_path = str_replace('landing_page', '', url($filename));
        ?>
         <picture>
                <source type="image/webp" srcset="{{$new_file_path}}.webp">
                <source type="image/jpeg" srcset="{{$new_file_path}}.jpg">
                <img class="img-fluid rounded-circle mb-4" src="{{$new_file_path}}.webp" alt="no image" style="width: 65px; height: 65px">
        </picture>
        <?php } ?>
        <div class="ps-4">
            <h5 class="mb-1">{{$testimonial->testimonial_by}}</h5>
            @if($testimonial->rating)
            @for($i=1;$i<=5;$i++)
            @if($i<=$testimonial->rating)
            <span class="bi bi-star-fill fa fa-star checked" style="color: rgb(255, 210, 48);"></span>
            @else
            <span class="fa fa-star"></span>
            @endif
            @endfor
            
            @endif
            <br/>
            @if($testimonial->course)
            <span>{{$testimonial->course}}</span>
            @endif
        </div>
    </div>
</div>