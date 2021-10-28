@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">Just In Time Compiler Mode</h1>
    <div class="mt-20"></div>
    <pre class="language-diff-js">
        <code class="language-diff-js">
            <span class="token unchanged language-js"><span class="token prefix unchanged"> </span> <span class="token comment">// tailwind.config.js</span>
            <span class="token prefix unchanged"> </span> module<span class="token punctuation">.</span><span class="token property-access">exports</span> <span class="token operator">=</span> <span class="token punctuation">{</span>
            <span class="token prefix unchanged"> </span>   mode<span class="token operator">:</span> <span class="token string">'jit'</span><span class="token punctuation">,</span>
            </span><span class="token inserted-sign inserted language-js"><span class="token prefix inserted">+</span>   <span class="token comment">// These paths are just examples, customize them to match your project structure</span>
            <span class="token prefix inserted">+</span>   purge<span class="token operator">:</span> <span class="token punctuation">[</span>
            <span class="token prefix inserted">+</span>     <span class="token string">'./public/**/*.html'</span><span class="token punctuation">,</span>
            <span class="token prefix inserted">+</span>     <span class="token string">'./src/**/*.{js,jsx,ts,tsx,vue}'</span><span class="token punctuation">,</span>
            <span class="token prefix inserted">+</span>   <span class="token punctuation">]</span><span class="token punctuation">,</span>
            </span><span class="token unchanged language-js"><span class="token prefix unchanged"> </span>   theme<span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token prefix unchanged"> </span>     <span class="token comment">// ...</span>
            <span class="token prefix unchanged"> </span>   <span class="token punctuation">}</span>
            <span class="token prefix unchanged"> </span>   <span class="token comment">// ...</span>
            <span class="token prefix unchanged"> </span> <span class="token punctuation">}</span></span></code></pre>
    <x-controls current-slide="7" />
@endsection
