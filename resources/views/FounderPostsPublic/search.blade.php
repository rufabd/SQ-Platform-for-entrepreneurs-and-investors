{{-- <div class="row" style="margin-bottom: 30px; margin-top: 100px;">
        <div class="col-md-2">
            <form method="GET" action="{{ route('search-project-postsss') }}">
                <div class="form-row align-items-center" style="width: 300px;">
                    <div class="col" style="width: 300px;">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                        placeholder="Search projects by title">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="comment-section">
            <div class="wrapperr">
                <div class="collapsiblee">
                    <input class="check-input" type="checkbox" id="collapsiblee-head">
                    <label for="collapsiblee-head">Filters</label>
                    <form method="GET" action="{{ route('search-project-postsss') }}">
                    <div class="collapsiblee-text">
                        <h4>Choose filter</h4>
                        
                        <div class="form-group">
                            <div class="col-md-2" style="width: 250px;">
                                <div class="form-row" style="width: 200px;">
                                    <select style="width: 200px;" name="hiringtag" id="hiring_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="">Choose Hiring Tag</option>
                                        @foreach($hiringtags as $hiringtag)
                                            <option>{{ $hiringtag }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="form-group">
                            <div class="col-md-2" style="width: 250px;">
                                <div class="form-row" style="width: 200px;">
                                    <select style="width: 200px;" name="hiring_tag" id="hiring_tag" class="form-control input-lg dynamic" data-dependent="state">
                                        <option value="">Choose Industry Tag</option>
                                        @foreach($industrytags as $industrytag)
                                            <option>{{ $industrytag }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                            <br>
                        <div class="form-group">
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Apply filters') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>

    --}}

    {!! Form::open(['action' => 'App\Http\Controllers\SearchController@indexxx', 'method' => 'GET']) !!}
<div class="form-group">
   
<select name="hiringtag" id="hiringtag" class="form-control input-lg dynamic" data-dependent="state">
<option value="">Choose hiring tag</option>


    @foreach($hiringtags as $hiringtag)
        <option value="{{ $hiringtag }}">{{ $hiringtag }}</option>
    @endforeach


 </select>
<br>

<select name="industrytag" id="industrytag" class="form-control input-lg dynamic" data-dependent="state">
<option>Choose industry tag</option>


    @foreach($industrytags as $industrytag)
        <option value="{{ $industrytag}}">{{ $industrytag}}</option>
    @endforeach


 </select>
</div>
<div class="form-group">
    {{ Form::Submit('submit', ['class' => 'btn btn-primary']) }}

</div>
@forelse($postss as $post)
        <div class ="box">
          <div class = "container2">
            <h1>{{$post->title}}</h1>
              {{-- <div class= "about">
                  <p>{{ $post->About }}</p>
              </div> --}}
                {{-- <div class="image">
                    <img src="{{$post->image}}" height = 200 width =200>
                </div> --}}
          </div>
        </div>
        <br>
@empty
No posts found
@endforelse