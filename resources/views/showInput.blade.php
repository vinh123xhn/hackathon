
<form method="post" action="{{ route('createQuestion', $i) }}">
    {{ csrf_field() }}
    @for($i = 1; $i <= $numberInput; $i++)
        <input type="text" name="name{{ $i }}">
    @endfor

    <input type="submit">
</form>