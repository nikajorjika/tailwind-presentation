@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">tailwind.config.js</h1>
    <div class="mt-20"></div>
    <pre class="language-js">
        <code class="language-js">
        <span class="token comment">// tailwind.config.js</span>
        module<span class="token punctuation">.</span><span class="token property-access">exports</span> <span class="token operator">=</span> <span class="token punctuation">{</span>
        purge<span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
        darkMode<span class="token operator">:</span> <span class="token boolean">false</span><span class="token punctuation">,</span> <span class="token comment">// or 'media' or 'class'</span>
        theme<span class="token operator">:</span> <span class="token punctuation">{</span>
            extend<span class="token operator">:</span> <span class="token punctuation">{</span><span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        variants<span class="token operator">:</span> <span class="token punctuation">{</span>
            extend<span class="token operator">:</span> <span class="token punctuation">{</span><span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        plugins<span class="token operator">:</span> <span class="token punctuation">[</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token punctuation">}</span></code>
    </pre>
    <x-controls current-slide="3" />
@endsection
