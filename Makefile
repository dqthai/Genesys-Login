all:
	git add --all
	git commit -m "$m"
	git push origin master
	git push heroku master
