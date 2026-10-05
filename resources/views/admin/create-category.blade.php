<!doctype html>
<html lang="en">
    @include('layout.head')
    <div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="sidebar pe-4 pb-3">
        @include('layout.sidebar')
    </div>

    <div class="content">
        @include('layout.header')

                <!-- Form Start -->
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-8 mx-auto">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Category Form</h6>
                                {{-- <form action="{{route('category.store')}}" method="post"> --}}
                                    @csrf
                                    <div class="mb-3">
                                        <label for="categoryText" class="form-label">Category</label>
                                        <input type="text"name="category" class="form-control" id="exampleInputCategory"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form End -->
    </div>
    
@include('layout.footer')
</body>
</html>














    