<div class="card-body border-bottom">
    <div class="d-flex justify-content-between">
        <div>
            {{$slot}}
        </div>
        <div>
            @isset($right)
                <div>
                    {{$right}}
                </div>
            @endisset
        </div>
    </div>
</div>