all:
	git add .
	git commit -m "Makefile commit"
	git push origin master
	git push heroku master
