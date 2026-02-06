---
Title: Tailshuffle: Bridging Tailwind UI and Shuffle.dev
Published: 2026-02-05
Author: Adam
Layout: adamjames-blog
Tag: tailwind, shuffle, docker, automation, web-development
---

I've been trying out [Shuffle.dev](https://shuffle.dev) for prototyping, but wanted to use paid [Tailwind Plus](https://tailwindcss.com/plus) components which need to be imported. The very core of getting the job done can be pretty quick if you follow the Shuffle docs; however as I went on I found a lot of small things that could be made easier, safer and so on. So I wrapped it all up into a script: **[tailshuffle.sh](https://github.com/adamjames/tailshuffle)**.

```bash
git clone https://github.com/adamjames/tailshuffle.git
./tailshuffle.sh all
```

It serves as a little bit of glue between [tailwindui-crawler](https://github.com/kiliman/tailwindui-crawler) and [shuffle-package-maker](https://www.npmjs.com/package/shuffle-package-maker), helping you more easily download your licensed components and convert them to Shuffle's required format.

Everything runs in Docker or Podman (whatever you happen to have installed) in an effort to keep things clean and tidy; you can run of course run individual stages (`build`, `download`, `convert`, `catalog`, `package`) separately, and each stage checks its prerequisites before running.

I won't bother to go over all the small things that this takes care of (that's all on [GitHub](https://github.com/adamjames/tailshuffle), after all) but suffice it to say that there was enough there that it felt worthwhile to save someone else the effort!
