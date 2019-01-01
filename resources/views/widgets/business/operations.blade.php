{!!Form::open(['route' => ['biz.business.destroy',$business->slug]])!!}
    <a href="{{route('business.edit',[$business->slug])}}">edit</a>
    @method('DELETE')
    {{form::submit('delete',['class'=>'btn text-danger btn-link'])}}
{!!Form::close()!!}