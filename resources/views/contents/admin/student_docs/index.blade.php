@extends('layouts.admin')


@section("content")
<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4 border-bottom-primary">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-uppercase">{{ __('Student Documents') }}</h6>

                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    
                </div>
            </div>


            <!-- Card Body -->
            <div class="card-body">
                <div class="text-center table-responsive">


                    <table class="table table-bordered table-striped table-hover cursor-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __("Student Name") }}</th>
                                <th scope="col">{{ __("Mobile") }}</th>
                                <th scope="col">{{ __("Email") }}</th>
                                <th scope="col">{{ __("Category") }}</th>
                                <th scope="col">{{ __("Is Mobile Verified") }}</th>
                                <th scope="col">{{ __("Is Email Verified") }}</th>
                                <th scope="col">{{ __("Father Income (in INR)") }}</th>
                                <th scope="col">{{ __("Documents Uploaded") }}</th>

                                @if(Auth::user()->hasRole('Super-Admin') || Auth::user()->hasRole('Super-Admin') || Auth::user()->hasAnyPermission(['department.edit' , 'department.delete']))
                                <th scope="col">{{ __("Action") }}</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($student_docs as $student_doc)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $student_doc->name }}
                                </td>
                                <td>
                                    {{ $student_doc->mobile }}<br/>
                                    <a class="fa fa-phone-alt text-primary" title="Call" href="tel:{{ $student_doc->mobile }}" target="_blank"> Call</a> |
                                    <a class="fa fa-sms text-warning" title="send sms on mobile" href="#" target="_blank"> Send SMS</a> |
                                    <a class="fab fa-whatsapp-square text-success" title="send reminder on whatsapp" href="https://wa.me/{{ $student_doc->mobile }}?text={{urlencode($whatsAppReminderMsg)}}" target="_blank"> WhatsApp Reminder</a>
                                </td>
                                <td>
                                    {{ $student_doc->email }}
                                </td>
                                <td>
                                    {{ $caste_categories[$student_doc->category] }}
                                </td>
                                <td>
                                    <i class="fa fa-{{ $student_doc->is_mobile_verified ? 'check-circle text-success' : 'times-circle text-danger' }}"></i>
                                </td>
                                <td>
                                    <i class="fa fa-{{ $student_doc->is_email_verified ? 'check-circle text-success' : 'times-circle text-danger' }}"></i>
                                </td>
                                <td>
                                    Rs. {{ $student_doc->father_income ?? 0}}
                                </td>
                                <td>
                                    @if($student_doc->father_income_certificate && $student_doc->father_income_certificate!='father_income_certificate')
                                    @php $father_income_img = 'storage/'.$student_doc->father_income_certificate; @endphp
                                    
                                    <a href="{{asset($father_income_img)}}" class="fancylight popup-btn" data-fancybox-group="light"> 
                                        <img src="{{asset($father_income_img)}}" height="auto" width="180px" class="img-thumbnail" alt="Photograph" />
                                    </a>
                                    
                                    @endif
                                    
                                </td>




                                <td>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header">{{ __('Actions') }}:</div>
                                            @if(Auth::user()->hasRole('Super-Admin') || Auth::user()->hasRole('Super-Admin') || Auth::user()->hasAnyPermission(['department.edit' , 'department.delete']))
                                            @can('document.edit')
                                            <x-EditButton itemId="{{ $student_doc->id }}" path="document.edit" />
                                            @endcan
                                            @can('document.delete')
                                            <x-DeleteButton itemId="{{ $student_doc->id }}" path="document.destroy" />
                                            @endcan
                                            @endif
                                            <div class="dropdown-divider"></div>
                                            @can('document.show')
                                            <x-buttons.show itemId="{{ $student_doc->id }}" path="document.show" />
                                            @endcan
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>

                    <hr />
                    <div class="text-center">
                        {!! $student_docs->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>

                </div>
            </div>
        </div>
    </div>


    @endsection