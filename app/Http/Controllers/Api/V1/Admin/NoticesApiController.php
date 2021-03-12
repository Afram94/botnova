<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Http\Resources\Admin\NoticeResource;
use App\Notice;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoticesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('notice_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NoticeResource(Notice::with(['users'])->get());
    }

    public function store(StoreNoticeRequest $request)
    {
        $notice = Notice::create($request->all());
        $notice->users()->sync($request->input('users', []));

        return (new NoticeResource($notice))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Notice $notice)
    {
        abort_if(Gate::denies('notice_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NoticeResource($notice->load(['users']));
    }

    public function update(UpdateNoticeRequest $request, Notice $notice)
    {
        $notice->update($request->all());
        $notice->users()->sync($request->input('users', []));

        return (new NoticeResource($notice))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Notice $notice)
    {
        abort_if(Gate::denies('notice_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $notice->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
