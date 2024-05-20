@props(['skills'])


<ul class="flex wrap">
  @foreach($skills->take(4) as $skill)
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-2 mr-2 text-xs">
    <a href="/?skill={{$skill->name}}" class="">{{$skill->name}}</a>
  </li>
  @endforeach
</ul>