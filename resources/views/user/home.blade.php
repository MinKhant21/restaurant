@extends('user.component.main')
@section('content')

<section class="p-4" id="app">
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-6">
            <div class="card">
                <div class="overlay"></div>
                <div class="card-body">
                    <h1>Breakfast</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    let app = new Vue({
        el : '#app',
        data : {
            categories : null,
            loading : false
        },
        methods: {
            fetchAll : function(){
                
            }
        }
    })


</script>
@endsection