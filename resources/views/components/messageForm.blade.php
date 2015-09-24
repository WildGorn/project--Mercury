@if(!$comments->isEmpty())
<div class="message">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span>{!! $comments[0]->user_name !!}</span>
                {{--<span class="pull-right label label-info">17:15:00 / 05.06.2015</span>--}}
                {{--<span class="pull-right label label-info">{!! \Carbon\Carbon::createFromFormat('G:i:s / d.m.Y', $comments[0]->created_at) !!}</span>--}}
                <span class="pull-right label label-info">{!! $comments[0]->created_at !!}</span>
            </h3>
        </div>
        <div class="panel-body">
            {!! $comments[0]->comment !!}
        </div>
    </div>
</div>
@endif

{!! Form::open(['url' => $article->slug]) !!}
<div class="form-group">
    {!! Form::hidden('article_id', $article->id) !!}
    {!! Form::label('user_name', 'Name') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control', 'placeholder'=>'Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('comment', 'Message') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5', 'cols' => '50', 'placeholder'=>'Text of message']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
