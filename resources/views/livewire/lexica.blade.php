@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center min-h-screen py-12 px-4 lg:p-0 bg-gray-50 sm:px-6 lg:px-8 bg-white dark:bg-zinc-800 dark:text-indigo-600">
  
  @include('components.topnav')
  
  <h1 class="text-4xl mt-20 mb-4">Lexica</h1>

  <div class="columns-2 md:columns-3 lg:columns-4 xl:columns-5 2xl:columns-6 p-0 space-y-4">

    @php
      $arr = [
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/14111830-99af-456a-832b-a4de4f15a15d"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/bd85748b-fd28-430e-98fd-73d74c642e20"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/10ecfca1-c454-4342-a997-4ba7cf0c373c"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/3081a779-61dd-46e6-84cb-7c0cefd4b4fe"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/1cc9e1fb-904e-40c1-9f0c-31b53e730b23"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/8af0e8d1-5ea6-4221-b9e2-ea07e206e405"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/a5abfb0d-6fd1-421b-8fbe-265361853a5a"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/ae3ecdfa-ba32-4d84-b8d5-93700ffebafb"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/c9762950-d270-4723-aafd-a078b7b38698"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/dd6ec1ad-bea0-4023-9d92-bb6cb0e2a0d0"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/dbfa7742-5f60-4160-8300-d2339d1da76d"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/6491878d-6099-4359-aa0f-767b5dd1b308"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/6c0a07d1-fea8-4937-95f8-76900f924fbd"],
        ["url"=>"https://lexica-serve-encoded-images2.sharif.workers.dev/md/aa2f0e84-6402-4b6d-bef6-9adf7f474bef"],
      ];
    @endphp

    @foreach ($arr as $item)
      @php
      $url = $item['url'];
      //$count = $loop->index + 1;
      //$str = substr($url, strrpos($url, '/') + 1); // get string after last /
      //$str = pathinfo($str, PATHINFO_FILENAME); // remove last . and after
      @endphp
        <img src="{{$url}}" alt="" />
    @endforeach

  </div>
</div>

@endsection