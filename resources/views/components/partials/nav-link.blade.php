@props(['active' => false])
<a
  class="{{ $active?'bg-slate-500 ': 'bg-slate-700 ' }} text-white px-4 py-2 rounded-md text-xs hover:text-slate-100 transition duration-300 hover:bg-slate-500"
  {{ $attributes }}>{{$slot}}</a>


