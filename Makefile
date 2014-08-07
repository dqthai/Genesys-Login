all:
	git add --all
	git commit -m "$m"
	git push heroku master
