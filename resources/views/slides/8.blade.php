@extends('master')

@section('content')
    <h1 class="my-5 text-3xl text-center">Dark Mode</h1>
    <div class="mt-20"></div>
    <pre class="language-html">
        <code class="language-html">
            <span class="token comment">&lt;!-- Dark mode not enabled --&gt;</span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>html</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>body</span><span class="token punctuation">&gt;</span></span>
                <span class="token comment">&lt;!-- Will be white --&gt;</span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">bg-white</span> dark:bg-black<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token comment">&lt;!-- ... --&gt;</span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>body</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>html</span><span class="token punctuation">&gt;</span></span>

            <span class="token comment">&lt;!-- Dark mode enabled --&gt;</span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>html</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">dark</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>body</span><span class="token punctuation">&gt;</span></span>
                <span class="token comment">&lt;!-- Will be black --&gt;</span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>bg-white <span class="code-highlight bg-code-highlight">dark:bg-black</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token comment">&lt;!-- ... --&gt;</span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>body</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>html</span><span class="token punctuation">&gt;</span></span>
        </code>
    </pre>
    <x-controls current-slide="8" />
@endsection
