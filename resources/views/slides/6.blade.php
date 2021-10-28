@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">Plugins</h1>
    <div class="mt-20"></div>
    <pre class="language-js">
            <code class="language-js">
                <span class="token comment">// tailwind.config.js</span>
                module<span class="token punctuation">.</span><span class="token property-access">exports</span> <span class="token operator">=</span> <span class="token punctuation">{</span>
                    plugins<span class="token operator">:</span> <span class="token punctuation">[</span>
                    <span class="token function">require</span><span class="token punctuation">(</span><span class="token string">'@tailwindcss/forms'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
                    <span class="token function">require</span><span class="token punctuation">(</span><span class="token string">'@tailwindcss/aspect-ratio'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
                    <span class="token function">require</span><span class="token punctuation">(</span><span class="token string">'@tailwindcss/typography'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
                    <span class="token function">require</span><span class="token punctuation">(</span><span class="token string">'tailwindcss-children'</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
                    <span class="token punctuation">]</span><span class="token punctuation">,</span>
                <span class="token punctuation">}</span></code></pre>
    <x-controls current-slide="6" />
@endsection

