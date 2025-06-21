@if($stu_dash_notifications)
@php
    $txt_classes_arr = ['success','danger','info','primary','secondary'];
@endphp

    <div class="col-12  mb-3">
        <marquee onmousehover="stop">
        @foreach($stu_dash_notifications as $stu_dash_notification)
            <span class="py-1 px-2 bg-warning text text-{{$txt_classes_arr[rand(0,3)]}}">
                <a href="{{route('admin_student_notification.show',$stu_dash_notification->id)}}" alt="click to view more">{{$stu_dash_notification->notification_title}}</a>&nbsp;&nbsp;&nbsp;&nbsp;|
            </span>
        @endforeach
        </marquee>
    </div>
@endif