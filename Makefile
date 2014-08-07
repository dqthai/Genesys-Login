all:
	git add --all
	git commit -m "$m"
	git push github master
	git push heroku master
