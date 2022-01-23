from __future__ import unicode_literals
import youtube_dl
import sys

youtube_video_url = ' '.join(sys.argv[1:])
ydl_opts = {'outtmpl':'video.mp4'}

with youtube_dl.YoutubeDL(ydl_opts) as ydl:
    ydl.download([youtube_video_url])
