@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">Variants</h1>
    <div class="mt-20"></div>
    <pre class="language-html">
            <pre class="language-js">
                <code class="language-js">
                <span class="token comment">// tailwind.config.js</span>
                module<span class="token punctuation">.</span><span class="token property-access">exports</span> <span class="token operator">=</span> <span class="token punctuation">{</span>
                  variants<span class="token operator">:</span> <span class="token punctuation">{</span>
                    fill<span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
                    extend<span class="token operator">:</span> <span class="token punctuation">{</span>
                      borderColor<span class="token operator">:</span> <span class="token punctuation">[</span><span class="token string">'focus-visible'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
                      opacity<span class="token operator">:</span> <span class="token punctuation">[</span><span class="token string">'disabled'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
                    <span class="token punctuation">}</span>
                  <span class="token punctuation">}</span><span class="token punctuation">,</span>
                <span class="token punctuation">}</span></code></pre>
    </pre>
    <x-controls current-slide="5" />
@endsection
