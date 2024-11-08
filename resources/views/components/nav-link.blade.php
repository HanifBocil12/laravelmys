<a {{$attributes}}
class="rounded-md 
              {{ $Active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
               px-3 py-2 text-sm font-medium" aria-current="{{$Active ? 'page' : false}}">{{slot}}</a>