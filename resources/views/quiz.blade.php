<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Exam
        </h2>
    </x-slot>
<div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4>MCQ Quiz</h4><span>(1 of 10)</span></div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                   
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="text-danger">Q.</h3>
                            <h5 class="mt-1 ml-2">{{$quiz->question}}</h5>
                        </div>
                          @foreach($quiz->answers as $q)
                        <div class="ans ml-2">
                            


<label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>{{$q->answer}}</span>
</label> 
  
</div>
@endforeach 
</div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script>
        $( document ).ready(function() {
         $.ajax({
        type: 'GET', 
        url: '/exam',
        dataType: 'json',
        success: function (data) {
            console.log(data);
    //         container.html('');
    //         $.each(data, function(index, item) {
    //         container.html(''); //clears container for new data
    //         $.each(data, function(i, item) {
    //               container.append('<div class="row"><div class="ten columns"><div class="editbuttoncont"><button class="btntimestampnameedit" data-seek="' + item.timestamp_time + '">' +  new Date(item.timestamp_time * 1000).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0] +' - '+ item.timestamp_name +'</button></div></div> <div class="one columns"><form action="'+ item.timestamp_id +'/deletetimestamp" method="POST">' + '{!! csrf_field() !!}' +'<input type="hidden" name="_method" value="DELETE"><button class="btntimestampdelete"><i aria-hidden="true" class="fa fa-trash buttonicon"></i></button></form></div></div>');
    //       });
    //             container.append('<br>');
    //         });
    //     },error:function(){ 
    //          console.log(data);
        }
     });
    });

        </script>
</x-app-layout>