@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('info') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Приветствую, админ') }}
                    <?php
                    header('Refresh: 2; URL=/');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
