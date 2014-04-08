

REMOTE	= a4b@lescigales.org:./dev
RELEASE = a4b@lescigales.org:./www
RSYNC	= -azv -e ssh --cvs-exclude --delete --exclude 'app/tmp/*'
RSYNCNC = -azv -e ssh --cvs-exclude --delete --exclude 'app/tmp/logs/*'

send:
	@clean
	rsync $(RSYNC) . $(REMOTE)
fetch:
	rsync $(RSYNC) $(REMOTE) .
nocache:
	@clean
	rsync $(RSYNCNC) . $(REMOTE)
release:
	@echo "You are about to upgrade a live server."
	@echo "Type Ctrl+C if you dont want"
	@read kk
	@clean
	rsync $(RSYNCNC) . $(RELEASE)
