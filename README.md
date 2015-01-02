###Sensys 2014 Website###

Make your changes in markdown and html.

To build the site to _site/ directory:

```
jekyll build
```

To deploy to turing:

```
rsync -avz -e ssh _site/ cocteau@turing.acm.org:/home/cocteau/sensys/2014
```