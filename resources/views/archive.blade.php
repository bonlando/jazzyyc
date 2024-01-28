@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  
<div class="white pt-5   @if(has_term('educational-videos', 'vault_category') OR has_term('performances', 'vault_category')) row-full @endif">
  <div class="container @if(has_term('educational-videos', 'vault_category') OR has_term('performances', 'vault_category')) video-wrapper @endif">
    <div class="row justify-content-center w-100">
      @if (!in_category('event-photos'))
      <div class="col-lg-10">
      @endif
      {{-- breadcrumbs --}}
      @if(has_term('resources', 'vault_category'))
      <a href="/the-vault/lab-band-vault-access/" class="btn btn-primary mb-4">Back to Lab Band Vault ></a>
      @endif
      @if(has_term('educational-videos', 'vault_category'))
      @if(current_user_can('mepr-active','rules: 23275'))
      <a href="/the-vault/lab-band-vault-access/" class="btn btn-primary mb-4">Back to Lab band Vault ></a>
      @elseif(current_user_can('mepr-active','rules:23274'))
      <a href="/the-vault/members-only-vault-access/" class="mb-4 btn btn-primary">Back to Member Vault ></a>
      @endif
      @endif
      @if(has_term('performances', 'vault_category'))
      <a href="/the-vault/members-only-vault-access/" class="btn btn-primary mb-4">Back to Member Vault ></a>
      @endif


  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

   <div class="row">
  @while (have_posts()) @php the_post() @endphp
 

    @include('partials.archive-'.get_post_type())
  
  @endwhile
   </div>

  {!! get_the_posts_navigation() !!}
        </div>
     @if (!in_category('event-photos'))
      </div>
      @endif
  </div>
</div>
@endsection
